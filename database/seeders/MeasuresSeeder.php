<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $measures = [
            [
                'val' => 22,
                'unit' => '°C',
                'sensor_id'=> 2,
            ],
            [
                'val' => 25,
                'unit' => '°C',
                'sensor_id'=> 2,
            ],
            [
                'val' => 30,
                'unit' => '%',
                'sensor_id'=> 3,
            ],
            [
                'val' => 70,
                'unit' => '%',
                'sensor_id'=> 3,
            ],
            [
                'val' => 13,
                'unit' => 'kw/h',
                'sensor_id'=> 4,
            ],
            [
                'val' => 15,
                'unit' => 'kw/h',
                'sensor_id'=> 4,
            ],
        ];

        foreach ($measures as $measure) {
            \App\Models\Measures::create($measure);
        }
    }
}
