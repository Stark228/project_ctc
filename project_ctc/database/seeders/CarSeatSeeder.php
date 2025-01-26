<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarSeater;

class CarSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seats = [
            '2',
            '5',
            '8',
        ];

        foreach ($seats as $seat) {
            CarSeater::firstOrCreate(['seats' => $seat]);
        }
    }
}
