<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'street' => $this->faker->streetName(),
            'zip_code' => $this->faker->postcode,
            'country_code' => $this->faker->countryCode,
            'city' => $this->faker->city,
            'street_number' => $this->faker->numberBetween(1, 100),
        ];
    }
}
