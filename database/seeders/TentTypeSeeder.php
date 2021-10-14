<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('tent_types')->insert([
            [
                'id' => 1,
                'name' => 'Small tents',
                'description' => 'Zelte für 1-3 Personen.',
                'icon' => 'campground',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Medium tents',
                'description' => 'Zelte für 3-6 Personen.',
                'icon' => 'house-user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Car tents',
                'icon' => 'shuttle-van',
                'description' => 'Zelte für 1-2 Personen.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
