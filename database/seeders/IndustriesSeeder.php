<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Industry::create([
            "name" => "Ozeva Technology",
            "leader" => "Tan Gay O",
            "address" => "Jl. Kapten Mulyadi No.52A, Sudiroprajan, Kec. Jebres, Kota Surakarta, Jawa Tengah",
            "phone" => "663552",
            "major_id" => 1,
            "quota" => 8,
            "status" => "",
            "entry_time" => "07:30:00",
            "exit_time" => "16:00:00",
            "user_id" => 8,
        ]);

        Industry::create([
            "name" => "CV. Ozeva",
            "leader" => "Erda",
            "address" => "Jl. Colomadu ",
            "phone" => "663552",
            "major_id" => 1,
            "quota" => 8,
            "status" => "",
            "entry_time" => "07:30:00",
            "exit_time" => "16:00:00",
            "user_id" => 2,
        ]);
    }
}
