<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos'; // Nombre de tu tabla en la BD
    protected $primaryKey = 'id_producto'; // Tu llave primaria
}
