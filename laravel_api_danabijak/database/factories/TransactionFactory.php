<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Company_ID' => $this->faker->randomNumber($nbDigit = NULL, $strict = false),
            'Description' => $this->faker->sentence,
            'Purpose' => $this->faker->paragraph,
            'Merchant_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'Amount' => $this->faker->numberBetween($min = 10, $max = 99),
            'Created_by' => rand(1, 10),
        ];
    }
}
