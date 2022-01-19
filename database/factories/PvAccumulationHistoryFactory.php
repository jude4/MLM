<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PvAccumulationHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'earning_type' => $this->faker->name(),
            'amount' => $this->faker->numberBetween(1000, 100000),
            'available_earned_bonus' => $this->faker->numberBetween(300000, 1000000),
            'accumulated_earned_bonus' => $this->faker->numberBetween(3000, 100000),
        ];
    }
}