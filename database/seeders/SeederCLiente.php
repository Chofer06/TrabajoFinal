<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederCLiente extends Seeder
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
                'nombreCliente'=> 'David Mueses',
                'cedulaCliente' => '1086107804',
                'direccionCLiente' => 'Pupiales',
                'emailCliente'=> 'davidmueses0@gmail.com',
                'telefonoCLiente' => '3137704914',
                'generoCLiente' => 'M',
                'fotoCLiente' => '7.jpg',

            ],
            [
                'nombreCliente'=> 'Yolima Quiroz',
                'cedulaCliente' => '1085275159',
                'direccionCLiente' => 'Potosi',
                'emailCliente'=> 'quirozyina@gmail.com',
                'telefonoCLiente' => '3163835030',
                'generoCLiente' => 'F',
                'fotoCLiente' => '8.jpg',
            ],
            [
                'nombreCliente'=> 'Nelcy Mallama',
                'cedulaCliente' => '37014344',
                'direccionCLiente' => 'Ipiales',
                'emailCliente'=> 'nemam.09@hotmail.com',
                'telefonoCLiente' => '3135940801',
                'generoCLiente' => 'F',
                'fotoCLiente' => '9.jpg',
            ],
            [
                'nombreCliente'=> 'Harvey Quiroz',
                'cedulaCliente' => '87713386z',
                'direccionCLiente' => 'Ipiales',
                'emailCliente'=> 'harveyquiroz@hotmail.com',
                'telefonoCLiente' => '3185574918',
                'generoCLiente' => 'M',
                'fotoCLiente' => '10.jpg',
            ],
            [
                'nombreCliente'=> 'Juan Perez',
                'cedulaCliente' => '87715315',
                'direccionCLiente' => 'Pasto',
                'emailCliente'=> 'juan.perez.1@outlook.com',
                'telefonoCLiente' => '3197845630',
                'generoCLiente' => 'M',
                'fotoCLiente' => '11.jpg',
            ],
            [
                'nombreCliente'=> 'Maria Vallejo',
                'cedulaCliente' => '1089745680',
                'direccionCLiente' => 'Cali',
                'emailCliente'=> 'mari..vallejo@gmail.com',
                'telefonoCLiente' => '3166897891',
                'generoCLiente' => 'F',
                'fotoCLiente' => '12.jpg',
            ]
        ];
        DB::table('clientes')->insert($datos);
    }
}
