<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // major
        $major = Major::create([
            'name' => 'Pengembangan Perangkat Lunak dan Gim',
            'concentration' => 'Rekayasa Perangkat Lunak',
            'acronym' => 'RPL',
            'short' => 'R',
        ]);
        // major
        $major = Major::create([
            'name' => 'Teknik Pemesinan',
            'concentration' => 'Teknik Pemesinan',
            'acronym' => 'Mesin',
            'short' => 'M',
        ]);
    }
}
