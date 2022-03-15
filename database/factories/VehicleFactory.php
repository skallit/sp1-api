<?php

namespace Database\Factories;

use App\Models\TypeDay;
use App\Models\VehicleStatus;
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
            'statusVehicle_id' => VehicleStatus::inRandomOrder()->first()->id,
        ];
    }
}
