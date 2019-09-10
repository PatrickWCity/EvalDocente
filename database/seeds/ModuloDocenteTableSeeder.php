<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ModuloDocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulo_docente')->insert([
            [
                'modulo_id' => '1',
                'docente_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'modulo_id' => '1',
                'docente_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'modulo_id' => '2',
                'docente_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'modulo_id' => '2',
                'docente_id' => '2',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
