<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    /**
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(10)
            ->hasAddress(1)
            ->create();
    }
}
