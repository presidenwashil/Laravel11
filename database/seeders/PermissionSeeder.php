<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'create years']);
        Permission::create(['name' => 'delete years']);
        Permission::create(['name' => 'edit years']);

        Permission::create(['name' => 'create semesters']);
        Permission::create(['name' => 'delete semesters']);
        Permission::create(['name' => 'edit semesters']);

        Permission::create(['name' => 'create subjects']);
        Permission::create(['name' => 'delete subjects']);
        Permission::create(['name' => 'edit subjects']);

        Permission::create(['name' => 'create students']);
        Permission::create(['name' => 'delete students']);
        Permission::create(['name' => 'edit students']);

        Permission::create(['name' => 'create teachers']);
        Permission::create(['name' => 'delete teachers']);
        Permission::create(['name' => 'edit teachers']);

        Permission::create(['name' => 'create classes']);
        Permission::create(['name' => 'delete classes']);
        Permission::create(['name' => 'edit classes']);

        Permission::create(['name' => 'create schedules']);
        Permission::create(['name' => 'delete schedules']);
        Permission::create(['name' => 'edit schedules']);

        Permission::create(['name' => 'create groups']);
        Permission::create(['name' => 'delete groups']);
        Permission::create(['name' => 'edit groups']);

        Permission::create(['name' => 'create attendances']);
        Permission::create(['name' => 'delete attendances']);
        Permission::create(['name' => 'edit attendances']);

        Permission::create(['name' => 'create rooms']);
        Permission::create(['name' => 'delete rooms']);
        Permission::create(['name' => 'edit rooms']);

        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'delete roles']);
        Permission::create(['name' => 'edit roles']);

        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'edit users']);

        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'delete permissions']);
        Permission::create(['name' => 'edit permissions']);
    }
}
