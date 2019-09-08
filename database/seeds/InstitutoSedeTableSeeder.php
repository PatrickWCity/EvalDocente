<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InstitutoSedeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Instituto_Sede')->insert([
            [
                'instituto_id' => '1',
                'sede_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'instituto_id' => '1',
                'sede_id' => '2',
                'created_at' => Carbon::now()
            ],
            [
                'instituto_id' => '2',
                'sede_id' => '3',
                'created_at' => Carbon::now()
            ],
            [
                'instituto_id' => '2',
                'sede_id' => '2',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
