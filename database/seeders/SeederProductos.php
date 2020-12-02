<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederProductos extends Seeder
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
                'nombreProducto'=> 'Limpido Clorox',
                'cantidadProducto' => 45,
                'precioProducto' => 2000,
                'categoria' => 4,
                'fotoProducto'=> '1.jpg',
            ],
    
            [
                'nombreProducto'=> 'Ron Viejo de Caldas',
                'cantidadProducto' => 200,
                'precioProducto' => 60000,
                'categoria' => 2,
                'fotoProducto'=> '2.jpg',
            ],

            [
                'nombreProducto'=> 'Cafe Aguila Roja',
                'cantidadProducto' => 100,
                'precioProducto' => 4000,
                'categoria' => 1,
                'fotoProducto'=> '3.jpg',
            ],
            
            [
                'nombreProducto'=> 'Arroz Diana',
                'cantidadProducto' => 50,
                'precioProducto' => 4200,
                'categoria' => 1,
                'fotoProducto'=> '4.jpg',
            ] ,

            [
                'nombreProducto'=> 'Chocolatinas Jet',
                'cantidadProducto' => 40,
                'precioProducto' => 7200,
                'categoria' => 1,
                'fotoProducto'=> '5.jpg',
            ],
            [
                'nombreProducto'=> 'Sal Refisal',
                'cantidadProducto' => 20,
                'precioProducto' => 1800,
                'categoria' => 1,
                'fotoProducto'=> '6.jpg',
            ] 
        ];
        DB::table('productos')->insert($datos);
    }
}
