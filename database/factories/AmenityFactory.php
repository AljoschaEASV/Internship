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
        $icons = collect('angellist', 'angry', 'campground', 'tint', 'accusoft');
        return [
            'name' => $this->faker->sentence(2),
            'icon' => $icons->random(),
        ];
    }
}
