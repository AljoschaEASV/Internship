<?php

namespace Database\Factories;

use App\Models\TentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class TentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TentType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'garden_id' => GardenFactory::factory(),
        ];
    }
}
