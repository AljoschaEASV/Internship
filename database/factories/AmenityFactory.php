<?php

namespace Database\Factories;

use App\Models\Amenity;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmenityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Amenity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $icons = collect(['baby-carriage', 'signal', 'bed', 'fireplace', 'dumbbell', 'paw', 'smoking-ban', 'shower']);
        return [
            'name' => $this->faker->word(),
            'icon' => $icons->random(),
        ];
    }
}
