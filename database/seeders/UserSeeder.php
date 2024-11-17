<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Major;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\detailRole;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'wisnu',
            'username' => 'student1',
            'email' => 'student1@email.com',
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
        $student->assignRole('student');
        $student = User::factory()->create([
            'name' => 'naufal',
            'username' => 'student2',
            'email' => 'student2@email.com',
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
        $student->assignRole('student');
        $student = User::factory()->create([
            'name' => 'fatimah',
            'username' => 'student3',
            'email' => 'student3@email.com',
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
        $student->assignRole('student');

        // teacher + k3
        $teacher = User::factory()->create([
            'name' => 'agung wiratmo',
            'username' => 'teacher1',
            'email' => 'teacher1@email.com',
            'password' => Hash::make('teacher123'),
        ]);

        Teacher::create([
            'major_id' => $major->id,
            'user_id' => $teacher->id,
            'phone' => '08124569871',
            'NIP' => "199408232020121003",
        ]);
        $teacher->assignRole('teacher');
        $teacher->assignRole('k3');
        $teacher->assignRole('coordinator');


        // teacher
        $teacher = User::factory()->create([
            'name' => 'afif nuruudin',
            'username' => 'teacher2',
            'email' => 'teacher2@email.com',
            'password' => Hash::make('teacher123'),
        ]);

        Teacher::create([
            'major_id' => $major->id,
            'user_id' => $teacher->id,
            'phone' => '08124569871',
            'NIP' => "1996000000000",
        ]);
        $teacher->assignRole('teacher');
        $teacher->assignRole('coordinator');

        //industry
        $industry = User::factory()->create([
            'name' => 'Tan Gay O',
            'username' => 'industry1',
            'email' => 'industry1@email.com',
            'password' => Hash::make('industry123'),
        ]);
        $industry->assignRole('industry');

        $superAdmin->assignRole('superadmin');
        $admin->assignRole('admin');
    }
}
