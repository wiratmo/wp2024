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
        // admin
        $admin = User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin123'),
        ]);
        Teacher::create([
            'name' => 'Muklis',
            'address' => 'Karanganyar',
            'user_id' => $admin->id,
            'phone' => '08124569871',
            'NIP' => "0000",
        ]);
        $admin->assignRole('admin');

        // student
        $student = User::factory()->create([
            'username' => 'student1',
            'email' => 'student1@email.com',
            'password' => Hash::make('student123'),
        ]);
        Student::create([
            'name' => 'wisnu',
            'address' => 'Sragen',
            'phone' => '089976716781',
            'user_id' => $student->id,
            'major_id' => 1,
            'NIS' => '8610',
            'NISN' => '0000000000',
            'enrollment_year' => '2024',
            'group' => 'B',
            'gender' => 'male',
        ]);

        $student->assignRole('student');
        $student = User::factory()->create([
            'username' => 'student2',
            'email' => 'student2@email.com',
            'password' => Hash::make('student123'),
        ]);
        Student::create([
            'name' => 'naufal',
            'address' => 'Sragen',
            'phone' => '089976716781',
            'user_id' => $student->id,
            'major_id' => 1,
            'NIS' => '8610',
            'NISN' => '0000000000',
            'enrollment_year' => '2024',
            'group' => 'B',
            'gender' => 'male',
        ]);
        $student->assignRole('student');

        $student = User::factory()->create([
            'username' => 'student3',
            'email' => 'student3@email.com',
            'password' => Hash::make('student123'),
        ]);
        Student::create([
            'name' => 'fatimah',
            'address' => 'Sragen',
            'phone' => '089976716781',
            'user_id' => $student->id,
            'major_id' => 2,
            'NIS' => '8610',
            'NISN' => '0000000000',
            'enrollment_year' => '2024',
            'group' => 'B',
            'gender' => 'male',
        ]);
        $student->assignRole('student');

        // teacher
        $teacher = User::factory()->create([
            'username' => 'teacher1',
            'email' => 'teacher1@email.com',
            'password' => Hash::make('teacher123'),
        ]);

        Teacher::create([
            'name' => 'agung wiratmo',
            'address' => 'Karanganyar',
            'user_id' => $teacher->id,
            'phone' => '08124569871',
            'NIP' => "199408232020121003",
        ]);
        $teacher->assignRole('teacher');
        // teacher
        $teacher = User::factory()->create([
            'username' => 'teacher2',
            'email' => 'teacher2@email.com',
            'password' => Hash::make('teacher123'),
        ]);

        Teacher::create([
            'name' => 'afif nuruudin',
            'address' => 'Sukoharjo',
            'user_id' => $teacher->id,
            'phone' => '08124569871',
            'NIP' => "1996000000000",
        ]);
        $teacher->assignRole('teacher');
        // teacher
        $teacher = User::factory()->create([
            'username' => 'teacher3',
            'email' => 'teacher3@email.com',
            'password' => Hash::make('teacher123'),
        ]);

        Teacher::create([
            'name' => 'darsono',
            'address' => 'Karanganyar',
            'user_id' => $teacher->id,
            'phone' => '08124569871',
            'NIP' => "1996000000000",
        ]);
        $teacher->assignRole('teacher');
        // teacher
        $teacher = User::factory()->create([
            'username' => 'teacher4',
            'email' => 'teacher4@email.com',
            'password' => Hash::make('teacher123'),
        ]);

        Teacher::create([
            'name' => 'sukasno',
            'address' => 'Sukoharjo',
            'user_id' => $teacher->id,
            'phone' => '08124569871',
            'NIP' => "1996000000000",
        ]);
        $teacher->assignRole(['teacher', 'k3']);
    }
}
