<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // superadmin
        $superAdmin = User::factory()->create([
            'name' => 'superadmin',
            'username' => 'superadmin',
            'email' => 'super@email.com',
            'password' => Hash::make('superadmin'),
        ]);

        // admin
        $admin = User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin123'),
        ]);

        // major
        $major = Major::create([
            'name' => 'Pengembangan Perangkat Lunak dan Gim',
            'acronym' => 'PPLG',
            'short' => 'R',
        ]);

        // student
        $student = User::factory()->create([
            'name' => 'student',
            'username' => 'student',
            'email' => 'student@email.com',
            'password' => Hash::make('student123'),
        ]);

        Student::create([
            'user_id' => $student->id,
            'major_id' => $major->id,
            'NIS' => '8610',
            'NISN' => '0000000000',
            'enrollment_year' => '2024',
            'group' => 'B',
            'gender' => 'male',
        ]);

        // teacher
        $teacher = User::factory()->create([
            'name' => 'teacher',
            'username' => 'teacher',
            'email' => 'teacher@email.com',
            'password' => Hash::make('teacher123'),
        ]);

        Teacher::create([
            'major_id' => $major->id,
            'user_id' => $teacher->id,
            'phone' => '08124569871',
            'NIP' => "0000000000000000",
        ]);

        $superAdmin->assignRole('superadmin');
        $admin->assignRole('admin');
        $student->assignRole('student');
        $teacher->assignRole('teacher');
    }
}
