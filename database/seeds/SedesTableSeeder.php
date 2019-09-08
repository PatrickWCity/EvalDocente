<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sedes')->insert([
            [
                'nombre' => 'Bellavista',
                'descripcion' => 'Sede AIEP Bellavista desde 2009 entregando educación técnico profesional de calidad a sus estudiantes. Conoce las escuelas y carreras que tenemos para ti.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Barrio Universitario',
                'descripcion' => 'AIEP Barrio Universitario desde 2005 permitiendo el acceso a la educación técnica a los jóvenes de Santiago, conoce las Escuelas y Carreras.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Rancagua',
                'descripcion' => 'Sede AIEP Rancagua, 42 años de tradición técnico profesional en la Región del Libertador General Bernardo O.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Providencia',
                'descripcion' => 'La Sede Providencia de AIEP cuenta con 51 años de historia y tradición técnico profesional. Conoce las escuelas y carreras que tenemos para ti.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'San Joaquín',
                'descripcion' => 'Sede AIEP San Joaquín desde 2012 permitiendo el acceso a educación técnica a los jóvenes del sur de Santiago. Conoce nuestras escuelas y carreras.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Maipú',
                'descripcion' => 'Sede AIEP Maipú aportando educación técnico profesional de calidad a una comuna con tradición industrial. Conoce nuestras escuelas y carreras.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
