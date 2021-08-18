<?php

namespace Database\Seeders;

use App\Models\Garden;
use Illuminate\Database\Seeder;

class GardenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        Garden::factory(10)->create();
    }
}
