<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BrandSeeder::class);
        $this->call(CarSeatSeeder::class);
        $this->call(CarTypeSeeder::class);
        $this->call(DealerSeeder::class);
        $this->call(FuelTypesSeeder::class);
        $this->call(TransmissionSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(CarImageSeeder::class);
    }
}
