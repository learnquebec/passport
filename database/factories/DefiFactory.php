<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\defi>
 */
class DefiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sd = $dt = $this->faker->dateTimeBetween($startDate = '-1 months', $endDate = 'now');
        $ed = $this->faker->dateTimeBetween($startDate = '-1 months', $endDate = '3 months');
        return [
            'name' => $this->faker->unique()->word
        ];
    }
}
