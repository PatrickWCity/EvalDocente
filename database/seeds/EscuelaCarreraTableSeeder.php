<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EscuelaCarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escuela_carrera')->insert([
            [
                'escuela_id' => '1',
                'carrera_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'escuela_id' => '1',
                'carrera_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'escuela_id' => '2',
                'carrera_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'escuela_id' => '2',
                'carrera_id' => '2',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
