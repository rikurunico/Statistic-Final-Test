<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NIM' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'name' => $this->faker->name(),
            'score' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
