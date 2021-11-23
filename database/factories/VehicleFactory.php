<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nameModel' => $this->faker->word(),
            'numberOfSeats' => $this->faker->numberBetween(2,5),
            'licensePlate' => $this->faker->randomNumber(5),
            'status' => $this->faker->word(),
        ];
    }
}
