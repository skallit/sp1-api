<?php

namespace Database\Factories;

use App\Models\AgencySeven;
use App\Models\Driver;
use App\Models\Vehicle;
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
            'driver_id'=>Driver::inRandomOrder()->first()->id,
            'agencySeven_id'=>AgencySeven::inRandomOrder()->first()->id,
            'vehicle_id'=>Vehicle::inRandomOrder()->first()->id,
        ];
    }
}
