<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\CarModel;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carBrands = [
            'Toyota',
            'Ford',
            'Honda',
            'Hyundai',
        ];

        foreach ($carBrands as $brand) {
            $brandRecord = Brand::firstOrCreate(['name' => $brand]);

            for ($i = 1; $i <= 3; $i++) {
                $brandRecord->carmodels()->create([
                    'name' => 'Model' . $i, 
                    'year' => '202' . $i,
                ]);
            }
        }
    }
}
