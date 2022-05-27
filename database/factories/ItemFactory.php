<?php

namespace Database\Factories;

use App\Models\Survivor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Survivor>
 */
class SurvivorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
