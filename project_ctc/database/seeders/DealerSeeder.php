<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dealership;
use App\Models\DealershipOfficeHour;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dealerships = [
            [
                'name' => 'MG Bhutan',
                'email' => 'mg@autohub.com',
                'logo_image' => 'storage/mg.jpg',
                'address' => 'Babesa, Thimphu',
                'location_url' => 'https://g.co/kgs/EhpXT4V',
                'contact_number' => '17866363',
            ],
            [
                'name' => 'Toyota Bhutan',
                'email' => 'tb@carworld.com',
                'logo_image' => 'storage/toyota.png',
                'address' => 'Babesa, Thimphu',
                'location_url' => 'https://g.co/kgs/ro4cM5F',
                'contact_number' => '17866361',
            ],
            [
                'name' => 'Hyundai Bhutan',
                'email' => 'hb@carworld.com',
                'logo_image' => 'storage/hundai.jpeg',
                'address' => 'Babesa, Thimphu',
                'location_url' => 'https://g.co/kgs/vKZZ8bH',
                'contact_number' => '17866362',
            ]
        ];

        $officeHours = [
            ['day_of_week' => 'Monday', 'opening_time' => '09:00:00', 'closing_time' => '18:00:00', 'is_off_day' => false],
            ['day_of_week' => 'Tuesday', 'opening_time' => '09:00:00', 'closing_time' => '18:00:00', 'is_off_day' => false],
            ['day_of_week' => 'Wednesday', 'opening_time' => '09:00:00', 'closing_time' => '18:00:00', 'is_off_day' => false],
            ['day_of_week' => 'Thursday', 'opening_time' => '09:00:00', 'closing_time' => '18:00:00', 'is_off_day' => false],
            ['day_of_week' => 'Friday', 'opening_time' => '09:00:00', 'closing_time' => '18:00:00', 'is_off_day' => false],
            ['day_of_week' => 'Saturday', 'opening_time' => '10:00:00', 'closing_time' => '16:00:00', 'is_off_day' => false],
            ['day_of_week' => 'Sunday', 'opening_time' => null, 'closing_time' => null, 'is_off_day' => true],
        ];

        foreach ($dealerships as $dealershipData) {
            $dealership = Dealership::firstOrCreate(
                ['name' => $dealershipData['name']],
                $dealershipData
            );

            foreach ($officeHours as $hour) {
                $dealership->dealershipOfficeHours()->create([
                    'day_of_week' => $hour['day_of_week'],
                    'opening_time' => $hour['is_off_day'] ? null : $hour['opening_time'],
                    'closing_time' => $hour['is_off_day'] ? null : $hour['closing_time'],
                    'is_off_day' => $hour['is_off_day'],
                ]);
            }
        }
    }
}
