<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $sports = [
            [
                'name' => 'Basketball'
            ],
            [
                'name' => 'Weightlifting'
            ],
            [
                'name' => 'Tennis'
            ],
            [
                'name' => 'Swimming'
            ],
            [
                'name' => 'Rowing'
            ]
        ];

        Sport::insert($sports);
    }
}
