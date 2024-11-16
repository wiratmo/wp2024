<?php

namespace Database\Seeders;

use App\Models\Industry;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class IndustriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO relation industry with user
        $industry = User::factory()->create([
            'username' => 'dudi1',
            'email' => 'dudi1@email.com',
            'password' => Hash::make('dudi123'),
        ]);

        Industry::create([
            "name" => "Ozeva Technology",
            "leader" => "Tan Gay O",
            "address" => "Jl. Kapten Mulyadi No.52A, Sudiroprajan, Kec. Jebres, Kota Surakarta, Jawa Tengah",
            "phone" => "663552",
            "quota" => 2,
            "major_id" => 1,
            "description" => "java programming",
            "is_verify" => 1,
            "verificator_id" => 3,
            "user_id" => $industry->id,
        ]);
        $industry->assignRole('industry');

        $industry = User::factory()->create([
            'username' => 'dudi2',
            'email' => 'dudi2@email.com',
            'password' => Hash::make('dudi123'),
        ]);

        Industry::create([
            "name" => "CV. Expressa",
            "leader" => "Erda",
            "address" => "Jl. Colomadu ",
            "phone" => "663552",
            "quota" => 3,
            "major_id" => 1,
            "description" => "laravel framework",
            "is_verify" => 1,
            "verificator_id" => 3,
            "user_id" => $industry->id,
        ]);

        $industry->assignRole('industry');

        $industry = User::factory()->create([
            'username' => 'dudi3',
            'email' => 'dudi3@email.com',
            'password' => Hash::make('dudi123'),
        ]);
        Industry::create([
            "name" => "CV. MSM",
            "leader" => "bos MSM",
            "address" => "Ring Road ",
            "phone" => "663552",
            "quota" => 1,
            "major_id" => 2,
            "description" => "bubut",
            "user_id" => $industry->id,
        ]);
        $industry->assignRole('industry');
    }
}
