<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
{
  
    $productos = \App\Models\Producto::paginate(12);

 
    return view('main', compact('productos'));
}

    public function show($id)
{
    $producto = \App\Models\Producto::findOrFail($id);
    return view('productos.show', compact('producto'));
}

  
}
