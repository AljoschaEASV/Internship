<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Database\Factories\GardenFactory;
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
                'name' => "small",
                'description' => "Small tents are for 1-3 persons. ",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
