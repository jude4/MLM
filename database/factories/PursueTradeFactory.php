<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PursueTradeFactory extends Factory
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
            'subject' => $this->faker->sentence(),
            'status' => $this->faker->numberBetween(0, 3),
            'state' => $this->faker->numberBetween(0, 3),
            'opertaional_capital' => $this->faker->numberBetween(20000, 50000),
            'percentage_yield' => $this->faker->numberBetween(0.4, 10),
            'first_purchase_amount' => $this->faker->numberBetween(20000, 50000),
            'second_purchase_amount' => $this->faker->numberBetween(20000, 50000),
            'third_purchase_amount' => $this->faker->numberBetween(20000, 50000),
            'fourth_purchase_amount' => $this->faker->numberBetween(20000, 50000),
            'first_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'second_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'third_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'fourth_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'first_av_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'second_av_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'third_av_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'fourth_av_purchase_price' => $this->faker->numberBetween(20000, 50000),
            'first_selling_price' => $this->faker->numberBetween(20000, 50000),
            'second_selling_price' => $this->faker->numberBetween(20000, 50000),
            'third_selling_price' => $this->faker->numberBetween(20000, 50000),
            'fourth_selling_price' => $this->faker->numberBetween(20000, 50000),
            'currency' =>  $this->faker->word('BTC'),
            'segment_bought' => $this->faker->numberBetween(0, 4),
            'segment_sold' => $this->faker->numberBetween(0, 4),
        ];
    }
}