<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Player::create([
                'nama_pemain' => fake()->name(),
                'nomor_punggung' => fake()->numberBetween(1,5),
                'posisi' => fake()->sentence(1),
                ]);
            }
    }
}
