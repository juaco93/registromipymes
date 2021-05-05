<?php

use Illuminate\Database\Seeder;

class codigosActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa_codigo_actividades')->insert([
            [
                'codigoActividad' => '461011',
                'descripcion' => 'Venta cereales',
                'descripcionLarga' => 'Venta al por mayor de cereales'
            ],
            [
                'codigoActividad' => '461012',
                'descripcion' => 'Venta semillas',
                'descripcionLarga' => 'Venta al por mayor de semillas'
            ],
            [
                'codigoActividad' => '461013',
                'descripcion' => 'Venta frutas',
                'descripcionLarga' => 'Venta al por mayor de frutas'
            ],
            [
                'codigoActividad' => '461014',
                'descripcion' => 'Acopio cereales',
                'descripcionLarga' => 'Acopio y acondicionamiento de cereales'
            ]
          ]);
    }
}
