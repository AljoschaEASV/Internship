<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Gender;
use App\Models\Interest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'address_id' => Address::factory(),
            'gender_id' => Gender::all()->random()->id,
            'first_name' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'remember_token' => Str::random(10),
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date,
            'profile_picture' => $this->faker->imageUrl($width = 200, $height = 200, 'people'),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return UserFactory
     */
    public function configure(): UserFactory
    {
        return $this->afterCreating(function (User $user) {
            $interest = Interest::all()->random();
            $user->interests()->attach($interest);
        });
    }
}
