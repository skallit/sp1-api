<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ControlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mileage' => $this->faker->numberBetween(1000,15000),
            'date' => $this->faker->date(),
        ];
    }
}
