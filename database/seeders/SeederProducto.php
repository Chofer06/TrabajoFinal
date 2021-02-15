<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombreProducto'=> 'Biscochuelo',
                'cantidadProducto' => 100,
                'precioProducto' => 15000,
                'fotoProducto'=> '1.jpg',
                'categoria' => 1,
            ],
            [
                'nombreProducto'=> 'Polvo de Hornear',
                'cantidadProducto' => 100,
                'precioProducto' => 12000,
                'fotoProducto'=> '2.jpg',
                'categoria' => 2,
            ],
            [
                'nombreProducto'=> 'Pastel Choocolate',
                'cantidadProducto' => 50,
                'precioProducto' => 25000,
                'fotoProducto'=> '3.jpg',
                'categoria' => 3,
            ],
            [
                'nombreProducto'=> 'Caramelo',
                'cantidadProducto' => 100,
                'precioProducto' => 8000,
                'fotoProducto'=> '4.jpg',
                'categoria' => 4,
            ],
            [
                'nombreProducto'=> 'Cuy',
                'cantidadProducto' => 15,
                'precioProducto' => 30000,
                'fotoProducto'=> '5.jpg',
                'categoria' => 5,
            ],
            [
                'nombreProducto'=> 'Hariana',
                'cantidadProducto' => 500,
                'precioProducto' => 3000,
                'fotoProducto'=> '6.jpg',
                'categoria' => 6,
            ]
        ];
        DB::table('productos')->insert($datos);
    }
}
