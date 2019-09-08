<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(InstitutosTableSeeder::class);
        $this->call(SedesTableSeeder::class);
        $this->call(EscuelasTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);
        $this->call(ModulosTableSeeder::class);
        $this->call(DocentesTableSeeder::class);
        $this->call(InstitutoSedeTableSeeder::class);
        $this->call(SedeEscuelaTableSeeder::class);
        $this->call(EscuelaCarreraTableSeeder::class);
        $this->call(CarreraModuloTableSeeder::class);
        $this->call(ModuloDocenteTableSeeder::class);
    }
}
