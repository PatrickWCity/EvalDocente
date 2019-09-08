<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DocentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Docentes')->insert([
            [
                'nombre' => 'Vignia Carolina',
                'appat' => 'Trejos',
                'apmat' => 'Bustamante',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Jose Bernardo',
                'appat' => 'Barra',
                'apmat' => 'Briones',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Hans Eduardo',
                'appat' => 'Lopez',
                'apmat' => 'Medina',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Hugo',
                'appat' => 'Gutiérrez',
                'apmat' => 'Salazar',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Elena Isabel',
                'appat' => 'Poblete',
                'apmat' => 'Alegría',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Rodrigo',
                'appat' => 'Cayul',
                'apmat' => '',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
