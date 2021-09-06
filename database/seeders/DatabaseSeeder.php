<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            InterestSeeder::class,
            GenderSeeder::class,
            AmenitySeeder::class,
            TentTypeSeeder::class,
            UserSeeder::class,
            GardenSeeder::class,
        ]);
    }
}
