<?php

namespace Database\Factories;

use App\Models\Amenity;
use App\Models\Garden;
use App\Models\TentType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GardenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Garden::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $user = User::all()->random();

        return [
            'title' => $this->faker->sentence(3),
            'subtitle' => $this->faker->sentence(5),
            'user_id' => $user->id,
            'address_id' => $user->address->id,
            'image' =>  'http://lorempixel.com/' . random_int(600, 1000) . '/' . random_int(600, 1000) . '/nature',
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return GardenFactory
     */
    public function configure(): self
    {
        return $this->afterCreating(function (Garden $garden) {
            $amenity = Amenity::all()->random();
            $tentType = TentType::all()->random();
            $garden->amenities()->attach($amenity);
            $garden->tentTypes()->attach($tentType);
        });
    }
}
