<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'date' => $this->faker->date,
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'email' => $this->faker->safeEmail,
            'user_id' =>User::first(),
        ];
    }
}
