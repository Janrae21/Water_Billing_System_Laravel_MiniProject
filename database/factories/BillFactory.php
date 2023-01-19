<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'barcode' => $this->faker->ean8,
            'amount'=> $this->faker->randomNumber,

        ];
    }
}
