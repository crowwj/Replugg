<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
    [
        'nombre' => 'Laptop Gamer Pro',
        'descripcion' => 'Potente laptop con RTX 4080',
        'precio' => 25000.00,
        'stock' => 10,
        'id_categoria' => 1 // Asegúrate que la categoría 1 exista
    ],
    [
        'nombre' => 'Teclado Mecánico RGB',
        'descripcion' => 'Teclado switch blue',
        'precio' => 1200.00,
        'stock' => 50,
        'id_categoria' => 1
    ]
    ]);
    }
}
