<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numberOfReservation' => $this->faker->unique->numberBetween(1,50),
            'date' => $this->faker->date(),
            'typeDay' => $this->faker->word(),
            'typeRoute' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
