<?php

use Illuminate\Database\Seeder;

class monotributoCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('afip_categoria_monotributos')->insert([
            [
                'descripcion' => 'Categoria A',
                'ingresosBrutosHasta' => '208739.25'
            ],
            [
                'descripcion' => 'Categoria B',
                'ingresosBrutosHasta' => '313108.87'
            ],
            [
                'descripcion' => 'Categoria C',
                'ingresosBrutosHasta' => '417478.51'
            ],
            [
                'descripcion' => 'Categoria D',
                'ingresosBrutosHasta' => '626217.78'
            ],
            [
                'descripcion' => 'Categoria E',
                'ingresosBrutosHasta' => '834957.00'
            ],
            [
                'descripcion' => 'Categoria F',
                'ingresosBrutosHasta' => '1043696.27'
            ],
            [
                'descripcion' => 'Categoria G',
                'ingresosBrutosHasta' => '1252435.53'
            ],
            [
                'descripcion' => 'Categoria H',
                'ingresosBrutosHasta' => '1739493.79'
            ],
            [
                'descripcion' => 'Categoria I',
                'ingresosBrutosHasta' => '2043905.21'
            ],
            [
                'descripcion' => 'Categoria J',
                'ingresosBrutosHasta' => '2348316.62'
            ],
            [
                'descripcion' => 'Categoria K',
                'ingresosBrutosHasta' => '2609240.69'
            ]
          ]);
    }
}
