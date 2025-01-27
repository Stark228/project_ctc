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
                'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.926754492006!2d89.65488497604368!3d27.44039333721406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e193fae9b74387%3A0x6ef1fd40dad88bb3!2sMG%20Bhutan-%20Kuenphen%20Motors!5e0!3m2!1sen!2sbt!4v1737978729169!5m2!1sen!2sbt',
                'contact_number' => '17866363',
            ],
            [
                'name' => 'Toyota Bhutan',
                'email' => 'tb@carworld.com',
                'logo_image' => 'storage/toyota.png',
                'address' => 'Babesa, Thimphu',
                'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d454342.73640515935!2d89.19035530147357!3d27.1703626878381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e193c714d63cdb%3A0xd651cdf1a6270d69!2sTata%20Motors%20Bhutan!5e0!3m2!1sen!2sbt!4v1737979298381!5m2!1sen!2sbt',
                'contact_number' => '17866361',
            ],
            [
                'name' => 'Hyundai Bhutan',
                'email' => 'hb@carworld.com',
                'logo_image' => 'storage/hundai.jpeg',
                'address' => 'Babesa, Thimphu',
                'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d454396.2422677249!2d89.18833694508777!3d27.15721388669609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e19383ffa93797%3A0x381494667781159c!2sBhutan%20Hyundai%20Motors%20Showroom!5e0!3m2!1sen!2sbt!4v1737978808011!5m2!1sen!2sbt',
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
