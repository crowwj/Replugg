<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{

public function index()
{
    $items = \DB::table('carrito')
        ->join('productos', 'carrito.id_producto', '=', 'productos.id_producto')
        ->where('id_usuario', auth()->id())
        ->select('carrito.*', 'productos.nombre', 'productos.precio', 'productos.imagen')
        ->get();
    $total = $items->sum(function($item) {
        return $item->precio * $item->cantidad;
    });
    
    return view('productos.carrito', compact('items', 'total'));
    

}

public function checkout(Request $request)
{
    $usuarioId = auth()->id();
    
    $items = \DB::table('carrito')
        ->join('productos', 'carrito.id_producto', '=', 'productos.id_producto')
        ->where('id_usuario', $usuarioId)
        ->select('carrito.*', 'productos.nombre', 'productos.precio', 'productos.stock')
        ->get();

    foreach ($items as $item) {
        if ($item->cantidad > $item->stock) {
            return redirect()->back()->with('error', "No hay suficiente stock de: {$item->nombre}. Solo quedan {$item->stock} unidades.");
        }
    }
    // -------------------------------------

    $total = $items->sum(fn($i) => $i->precio * $i->cantidad);

    \DB::transaction(function () use ($usuarioId, $total, $items) {
        \DB::table('pedidos')->insert([
            'id_usuario' => $usuarioId,
            'total' => $total,
            'estado' => 'completado',
            'fecha' => now()
        ]);

        foreach ($items as $item) {
            \DB::table('productos')
                ->where('id_producto', $item->id_producto)
                ->decrement('stock', $item->cantidad);
        }

        \DB::table('carrito')->where('id_usuario', $usuarioId)->delete();
    });

    return redirect()->route('pedidos.historial')->with('success', '¡Compra exitosa!');
}


public function remove($id)
{
    \DB::table('carrito')
        ->where('id_carrito', $id)
        ->where('id_usuario', auth()->id())
        ->delete();

    return redirect()->back()->with('success', 'Producto eliminado');
}


public function add(Request $request, $id)
{
    $producto = \DB::table('productos')->where('id_producto', $id)->first();

    if (!$producto || $producto->stock <= 0) {
        return redirect()->back()->with('error', 'Lo sentimos, este producto se acaba de agotar.');
    }

    $usuarioId = auth()->id();
    $enCarrito = \DB::table('carrito')
        ->where('id_usuario', $usuarioId)
        ->where('id_producto', $id)
        ->first();

    $cantidadActual = $enCarrito ? $enCarrito->cantidad : 0;
    if ($cantidadActual >= $producto->stock) {
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'HAS SELECCIONADO EL LÍMITE DE UNIDADES DISPONIBLES'
            ], 422);
        }
        return redirect()->back()->with('error_limite', 'HAS SELECCIONADO EL LÍMITE DE UNIDADES DISPONIBLES');
    }

    if ($enCarrito) {
        \DB::table('carrito')->where('id_carrito', $enCarrito->id_carrito)->increment('cantidad');
    } else {
        \DB::table('carrito')->insert([
            'id_usuario' => $usuarioId,
            'id_producto' => $id,
            'cantidad' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'nuevoStock' => $producto->stock - ($cantidadActual + 1),
            'message' => 'Producto añadido.'
        ]);
    }

    if ($request->has('comprar_ahora')) {
        return redirect()->route('carrito.index');
    }

    return redirect()->back()->with('success', 'Producto añadido correctamente.');
}


}
