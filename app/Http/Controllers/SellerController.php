<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{


  public function store(Request $request)
{
    // 1. Validar
    $request->validate([
        'nombre' => 'required|string|max:30',
        'categoria_id' => 'required|exists:categorias,id_categoria',
        'condicion' => 'required',
        'precio' => 'required|numeric|min:0|max:999999.99',
        'stock' => 'required|integer|max:999',
        'descripcion' => 'required|string|max:255', // Nota: tu BD tiene varchar(255)
        'imagenes' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
    ]);

    // 2. Procesar la imagen
    $nombreArchivo = null;
    if ($request->hasFile('imagenes')) {
        // Guardamos el archivo con un nombre único basado en el tiempo
        $archivo = $request->file('imagenes');
        $nombreArchivo = time() . '.' . $archivo->getClientOriginalExtension();
        $archivo->move(public_path('imagenes'), $nombreArchivo); // Se guardará en la carpeta /public/imagenes
    }

    // 3. Insertar
    \DB::table('productos')->insert([
        'nombre'       => $request->nombre,
        'descripcion'  => $request->descripcion,
        'precio'       => $request->precio,
        'stock'        => $request->stock,
        'id_categoria' => $request->categoria_id,
        'id_usuario'   => auth()->id(), // Esto usa la columna id_usuario que ya tienes
        'imagen'       => $nombreArchivo, // Guardamos solo el nombre del archivo
        'id_impuesto'  => 1, // Valor por defecto ya que es obligatorio en tu BD
    ]);

    return back()->with('status', '¡Producto publicado!');
}

   
    public function checkRole()
    {
        $user = Auth::user();

   
        if ($user->role === 'admin' || $user->role === 'seller') {
        return redirect()->route('seller.form');
    }


        return redirect()->route('seller.terms');
    }

    
    public function showTerms()
    {
        return view('vendedor.terms'); 
    }

   
    public function becomeSeller()
    {
        $user = Auth::user();
        $user->role = 'seller'; 
        $user->save();

        return redirect()->route('seller.form')->with('status', '¡Felicidades! Ya puedes vender.');
    }

    public function showForm()
    {
        return view('vendedor.vender-producto'); 

        $user = Auth::user();

    // Candado de seguridad manual (en caso de que no uses un Middleware global)
    if ($user->role !== 'admin' && $user->role !== 'seller') {
        return redirect()->route('seller.terms');
    }

    return view('vendedor.vender-producto');
    }
}