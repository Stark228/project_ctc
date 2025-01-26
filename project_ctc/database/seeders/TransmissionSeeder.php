<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransmissionType;


class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trans = [
            'Manual',
            'Automatic'
        ];

        foreach ($trans as $tran) {
            TransmissionType::firstOrCreate(['type' => $tran]);
        }
    }
}
