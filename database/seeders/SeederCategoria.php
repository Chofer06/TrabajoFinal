<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nombreCategoria' => 'Reposteria',
                'descripcion' => 'Oficio encargado de preparar y decorar dulces',
            ],
            [
                'nombreCategoria' => 'Panaderia',
                'descripcion' => 'Negocio de producción y venta de pan',
            ],
            [
                'nombreCategoria' => 'Pasteleria',
                'descripcion' => 'Técnica de elaborar pastel y otros productos',
            ],
            [
                'nombreCategoria' => 'Complementarios',
                'descripcion' => 'Disferentes tipos de decoraciones',
            ],  
            [
                'nombreCategoria' => 'Industrial',
                'descripcion' => 'Grandes cantidades de productos',
            ], 
            [
                'nombreCategoria' => 'Restaurantes',
                'descripcion' => 'Las mejores comidas tipicas',
            ]
        ];
        DB::table('categorias')->insert($data);
    }
}
