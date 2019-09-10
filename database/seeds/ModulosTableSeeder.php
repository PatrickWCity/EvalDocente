<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ModulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulos')->insert([
            [
                'nombre' => 'Calidad Y Auditoría',
                'descripcion' => 'Calidad Y Auditoría',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Internet De Las Cosas (IOT)',
                'descripcion' => 'Internet De Las Cosas (IOT)',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Seguridad Informática',
                'descripcion' => 'Seguridad Informática',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Taller De Integración',
                'descripcion' => 'Taller De Integración',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Inglés Aplicado Para Tecnología De La Informática II',
                'descripcion' => 'Inglés Aplicado Para Tecnología De La Informática II',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Taller De Ingeniería De Software',
                'descripcion' => '',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
