<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SedeEscuelaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sede_Escuela')->insert([
            [
                'sede_id' => '1',
                'escuela_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'sede_id' => '1',
                'escuela_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'sede_id' => '2',
                'escuela_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'sede_id' => '2',
                'escuela_id' => '2',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
