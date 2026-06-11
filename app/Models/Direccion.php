<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
   
    protected $table = 'direcciones';
    protected $primaryKey = 'idDireccion';
    public $timestamps = false;
   
   protected $fillable = [
     'id_usuario',
    'idCP', 
    'Calle',    
    'NumExt',  
    
];

}