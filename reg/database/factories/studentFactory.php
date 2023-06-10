<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "email"=>$this->faker->email,
            "phone"=>$this->faker->email,
            "adress"=>$this->faker->address
        ];
    }
}
