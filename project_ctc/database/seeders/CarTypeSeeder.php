<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarType;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carTypes = [
            [
                'type' => 'SUV',
                'image_path' => 'storage/suv.png', 
            ],
            [
                'type' => 'Sedan',
                'image_path' => 'storage/sedan.png',
            ],
            [
                'type' => 'Truck',
                'image_path' => 'storage/truck.png',
            ],
            [
                'type' => 'Coupe',
                'image_path' => 'storage/coupe.png',
            ],
            [
                'type' => 'Hatchback',
                'image_path' => 'storage/hatchback.png',
            ],
            [
                'type' => 'Convertible',
                'image_path' => 'storage/convertible.png',
            ]
        ];

        foreach ($carTypes as $carType) {
            CarType::firstOrCreate(
                ['type' => $carType['type']],  
                ['image_path' => $carType['image_path']]
            );
        }
    }
}
