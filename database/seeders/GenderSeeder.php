<?php

namespace Database\Seeders;

use App\Models\Gender;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        DB::table('genders')->insert([
            
            [
                'id' => 1,
                'name' => "male",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => "female",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], 
            [
                'id' => 3,
                'name' => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            

        ]);
    }
}
