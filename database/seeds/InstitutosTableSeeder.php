<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InstitutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutos')->insert([
            [
                'nombre' => 'AIEP',
                'descripcion' => '24 sedes, 10 escuelas y más de 70 carreras. Continuidad de estudios en la Universidad Andrés Bello. Programa Ejecutivo Vespertino PEV.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'DUOC',
                'descripcion' => 'Porque sabemos que el mundo está cambiando, en Duoc UC formamos a los especialistas que Chile necesita.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'INACAP',
                'descripcion' => 'Universidad Tecnológica de Chile INACAP',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Universidad de Chile',
                'descripcion' => 'Principal institución del Estado en educación superior pública, fundada en 1842.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Universidad de las Americas',
                'descripcion' => 'Universidad privada autónoma chilena fundada en 1988.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Universidad Andrés Bello',
                'descripcion' => 'Universidad privada chilena creada en 1988, perteneciente a la red de universidades privadas Laureate International.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
