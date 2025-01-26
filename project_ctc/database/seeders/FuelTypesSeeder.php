<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FuelType;


class FuelTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Diesel',
            'Electric',
        ];

        foreach ($types as $type) {
            FuelType::firstOrCreate(['type' => $type]);
        }
    }
}
