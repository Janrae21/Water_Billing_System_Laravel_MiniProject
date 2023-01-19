<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillCollectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name'=> $this->faker->name,
            'company name'=> $this->faker->company,
            'client_id'=>Client::first(),
        ];
    }
}
