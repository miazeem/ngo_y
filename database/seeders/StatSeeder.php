<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'title' => 'Projects Completed',
                'description' => '150+',
            ],
            [
                'title' => 'Volunteers',
                'description' => '300+',
            ],
            [
                'title' => 'Communities Served',
                'description' => '50+',
            ],
            [
                'title' => 'Funds Raised',
                'description' => '$1M+',
            ],

            [
                'title' => 'Lives Impacted',
                'description' => '10,000+',
            ],

            [
                'title' => 'Countries Reached',
                'description' => '15+',
            ]

        ];

        foreach ($stats as $stat) {
            Stat::updateOrCreate([
                'title' => $stat['title'],
            ], [
                'description' => $stat['description'],
            ]);
        }
    }
}
