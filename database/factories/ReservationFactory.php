<?php

namespace Database\Factories;

use App\Models\AgencySeven;
use App\Models\Driver;
use App\Models\StatusReservation;
use App\Models\TypeDay;
use App\Models\TypeRoute;
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
            'numberOfReservation' => $this->faker->unique->numberBetween(1,5000),
            'date' => $this->faker->date(),
            'typeDay_id' => TypeDay::inRandomOrder()->first()->id,
            'typeRoute_id' => TypeRoute::inRandomOrder()->first()->id,
            'status_id' => StatusReservation::inRandomOrder()->first()->id,
            'driver_id'=>Driver::inRandomOrder()->first()->id,
            'departureAgency_id'=>AgencySeven::inRandomOrder()->first()->id,
            'returnAgency_id'=>AgencySeven::inRandomOrder()->first()->id,
            'vehicle_id'=>Vehicle::inRandomOrder()->first()->id,
        ];
    }
}
