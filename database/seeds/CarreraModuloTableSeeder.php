<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CarreraModuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Carrera_Modulo')->insert([
            [
                'carrera_id' => '1',
                'modulo_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'carrera_id' => '1',
                'modulo_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'carrera_id' => '2',
                'modulo_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'carrera_id' => '2',
                'modulo_id' => '2',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
