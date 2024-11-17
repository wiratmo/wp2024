<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view-admin']);
        Permission::create(['name' => 'add-admin']);
        Permission::create(['name' => 'edit-admin']);
        Permission::create(['name' => 'delete-admin']);

        Permission::create(['name' => 'view-student']);
        Permission::create(['name' => 'add-student']);
        Permission::create(['name' => 'edit-student']);
        Permission::create(['name' => 'delete-student']);

        Permission::create(['name' => 'view-teacher']);
        Permission::create(['name' => 'add-teacher']);
        Permission::create(['name' => 'edit-teacher']);
        Permission::create(['name' => 'delete-teacher']);

        Permission::create(['name' => 'view-industries']);
        Permission::create(['name' => 'add-industries']);
        Permission::create(['name' => 'edit-industries']);
        Permission::create(['name' => 'delete-industries']);



        Permission::create(['name' => 'view-industry']);

        Permission::create(['name' => 'view-mentoring-student']);

        Permission::create(['name' => 'plotting-teacher-student']);

        Permission::create(['name' => 'verify-industry']);

        Permission::create(['name' => 'edit-industry']);
        // Permission::create(['name' => 'tambah-transaksi']);
        // Permission::create(['name' => 'hapus-transaksi']);

        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'industry']);
        Role::create(['name' => 'coordinator']);
        Role::create(['name' => 'k3']);

        $roleAdmin = Role::findByName('superadmin');
        $roleAdmin->givePermissionTo('view-admin');
        $roleAdmin->givePermissionTo('add-admin');
        $roleAdmin->givePermissionTo('edit-admin');
        $roleAdmin->givePermissionTo('delete-admin');
        $roleAdmin->givePermissionTo('view-student');
        $roleAdmin->givePermissionTo('add-student');
        $roleAdmin->givePermissionTo('edit-student');
        $roleAdmin->givePermissionTo('delete-student');
        $roleAdmin->givePermissionTo('view-teacher');
        $roleAdmin->givePermissionTo('add-teacher');
        $roleAdmin->givePermissionTo('edit-teacher');
        $roleAdmin->givePermissionTo('delete-teacher');

        $roleStudent = Role::findByName('student');
        $roleStudent->givePermissionTo('view-industry');

        $roleTeacher = Role::findByName('teacher');
        $roleTeacher->givePermissionTo('view-mentoring-student');

        $roleCoordinator = Role::findByName('coordinator');
        $roleCoordinator->givePermissionTo('plotting-teacher-student');

        $roleK3 = Role::findByName('k3');
        $roleK3->givePermissionTo('verify-industry');

        $roleIndustry = Role::findByName('industry');
        $roleIndustry->givePermissionTo('edit-industry');
    }
}
