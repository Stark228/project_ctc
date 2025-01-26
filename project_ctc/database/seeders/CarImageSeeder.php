<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarImage;

class CarImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            ['car_id' => 1, 'image_path' => 'storage/cars/1.jpeg'],
            ['car_id' => 1, 'image_path' => 'storage/cars/1a.jpeg'],
            ['car_id' => 1, 'image_path' => 'storage/cars/1b.jpeg'],
            ['car_id' => 1, 'image_path' => 'storage/cars/1c.jpeg'],
            ['car_id' => 1, 'image_path' => 'storage/cars/1d.jpeg'],
            ['car_id' => 1, 'image_path' => 'storage/cars/1e.jpeg'],
            ['car_id' => 2, 'image_path' => 'storage/cars/2.jpeg'],
            ['car_id' => 3, 'image_path' => 'storage/cars/3.jpeg'],
            ['car_id' => 4, 'image_path' => 'storage/cars/4.jpeg'],
            ['car_id' => 5, 'image_path' => 'storage/cars/5.jpeg'],
            ['car_id' => 6, 'image_path' => 'storage/cars/6.jpeg'],
            ['car_id' => 7, 'image_path' => 'storage/cars/7.jpeg'],
            ['car_id' => 8, 'image_path' => 'storage/cars/8.jpeg'],
            ['car_id' => 9, 'image_path' => 'storage/cars/9.jpeg'],
            ['car_id' => 10, 'image_path' => 'storage/cars/10.jpeg'],
            ['car_id' => 11, 'image_path' => 'storage/cars/11.jpeg'],
            ['car_id' => 12, 'image_path' => 'storage/cars/11.jpeg'],

        ];

        foreach ($images as $image) {
            CarImage::create($image);
        }
    }
}
