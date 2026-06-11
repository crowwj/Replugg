<?php

namespace App\Http\Controllers;
use App\Models\Direccion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
    public function seleccionar($id)
    {
        \App\Models\Direccion::where('id_usuario', auth()->id())->update(['es_predeterminada' => 0]);
        \App\Models\Direccion::where('idDireccion', $id)->where('id_usuario', auth()->id())->update(['es_predeterminada' => 1]);
        
        return redirect()->route('direcciones.index')->with('success', 'Dirección seleccionada.');
    }

    public function index()
{
   
    $direcciones = \App\Models\Direccion::where('id_usuario', auth()->id())->get();
    
    return view('panel.direcciones.dirGuar', compact('direcciones'));
    
}
   
    public function create()
    {
        $municipios = [
            'Ahome', 'Angostura', 'Badiraguato', 'Concordia', 'Cosalá', 
            'Culiacán', 'Choix', 'Elota', 'Escuinapa', 'El Fuerte', 
            'Guasave', 'Mazatlán', 'Mocorito', 'Rosario', 'Salvador Alvarado', 
            'San Ignacio', 'Sinaloa', 'Navolato', 'Eldorado', 'Juan José Ríos'
        ];

        return view('components.panel.direcciones.direccionesAdd', compact('municipios'));
    }

   public function obtenerDatosPorCp($cp)
{
   
    $datos = Cp::where('codigo_postal', $cp)->get();

    if ($datos->isEmpty()) {
        return response()->json(['error' => 'CP no encontrado'], 404);
    }

    return response()->json($datos);
}
 public function store(Request $request)
{
    $request->validate([
        'calle'  => 'required',
        'numext' => 'required',
        'cp'     => 'required',
    ]);

    try {
        \App\Models\Direccion::create([
            'id_usuario' => auth()->id(),
            'idCP'       => $request->cp,
            'Calle'      => $request->calle,
            'NumExt'     => $request->numext,
        ]);
        
        return back()->with('success', '¡Dirección guardada!');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
    }
}
}