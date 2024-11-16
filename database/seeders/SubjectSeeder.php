<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = Subject::create([
            'name' => 'Pemrograman Web'
        ]);
        DB::table('teachers_subjects_majors')->insert([
            'teacher_id' => 1,
            'major_id' => 1,
            'subject_id' => $subject->id
        ]);

        $subject = Subject::create([
            'name' => 'Database'
        ]);
        DB::table('teachers_subjects_majors')->insert([
            'teacher_id' => 2,
            'major_id' => 1,
            'subject_id' => $subject->id
        ]);

        $subject = Subject::create([
            'name' => 'Matematika'
        ]);

        DB::table('teachers_subjects_majors')->insert([
            'teacher_id' => 3,
            'major_id' => 1,
            'subject_id' => $subject->id
        ]);


        DB::table('teachers_subjects_majors')->insert([
            'teacher_id' => 3,
            'major_id' => 2,
            'subject_id' => $subject->id
        ]);

        $subject = Subject::create([
            'name' => 'Mesin Bubut'
        ]);

        DB::table('teachers_subjects_majors')->insert([
            'teacher_id' => 4,
            'major_id' => 2,
            'subject_id' => $subject->id
        ]);
    }
}
