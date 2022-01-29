<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SectionTradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 9),
            'subject' => $this->faker->word(),
            'status' => $this->faker->numberBetween(0, 3),
            'state' => $this->faker->numberBetween(0, 3),
            'starting_price' => $this->faker->numberBetween(100000, 400000),
            'amount_by_segment' => $this->faker->numberBetween(1000, 40000),
            'percentage_yield' => $this->faker->numberBetween(1, 3),
            'number_of_segments' => $this->faker->numberBetween(3, 6),
            'first_selling_price' => $this->faker->numberBetween(200000, 500000),
            'second_selling_price' => $this->faker->numberBetween(200000, 500000),
            'third_selling_price' =>  $this->faker->numberBetween(200000, 500000),
            'fourth_selling_price' => $this->faker->numberBetween(200000, 500000),
            'fifth_selling_price' =>  $this->faker->numberBetween(200000, 500000),
            'sixth_selling_price' => $this->faker->numberBetween(200000, 500000),
            'currency' =>  $this->faker->word('BTC'),
            'segment_bought' => $this->faker->numberBetween(0, 6),
            'segment_sold' => $this->faker->numberBetween(0, 6),
        ];
    }
}