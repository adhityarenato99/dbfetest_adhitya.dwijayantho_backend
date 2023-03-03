<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MerchantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Merchant_name' => $this->faker->company,
            'Merchant_address' => $this->faker->address,
            'Created_by' => rand(1, 10),
        ];
    }
}
