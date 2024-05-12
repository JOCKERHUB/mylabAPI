<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sensors = [
            [
                'name' => 'Temperature Sensor',
                'description' => 'This sensor measures the temperature in the room',
                'vendor' => 'Bosch',
                'type'=> 'temperature',
                'user_id'=> 1,
            ],
            [
                'name' => 'Humidity Sensor',
                'description' => 'This sensor measures the humidity in the room',
                'vendor' => 'Siemens',
                'type'=> 'humidity',
                'user_id'=> 1,

            ],
            [
                'name' => 'Energy Sensor',
                'description' => 'This sensor measures the energy consumption in the room',
                'vendor' => 'Btcino',
                'type'=> 'energy',
                'user_id'=> 1,
            ],
        ];

        foreach ($sensors as $sensor) {
            \App\Models\Sensor::create($sensor);
        }
    }
}
