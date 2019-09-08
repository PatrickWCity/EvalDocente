<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'instituto-list',
            'instituto-create',
            'instituto-edit',
            'instituto-delete',
            'sede-list',
            'sede-create',
            'sede-edit',
            'sede-delete',
            'escuela-list',
            'escuela-create',
            'escuela-edit',
            'escuela-delete',
            'carrera-list',
            'carrera-create',
            'carrera-edit',
            'carrera-delete',
            'modulo-list',
            'modulo-create',
            'modulo-edit',
            'modulo-delete',
            'docente-list',
            'docente-create',
            'docente-edit',
            'docente-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
