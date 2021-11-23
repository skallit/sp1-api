<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgencySevenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city(),
            'department' => $this->faker->numberBetween(1,99),
        ];
    }
}
