<?php

namespace Database\Factories;

use App\Models\Survivor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Survivor>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'relevance' => rand(1, 10)
        ];
    }
}
