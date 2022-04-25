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
        $carfaker = (new \Faker\Factory())::create();
        $carfaker->addProvider(new \Faker\Provider\Fakecar($carfaker));
        return [
            'nameModel' => $carfaker->vehicle,
            'numberOfSeats' => $this->faker->numberBetween(2,5),
            'licensePlate' => $carfaker->vehicleRegistration('[A-Z]{2}-[0-9]{5}'),
            'status' => $this->faker->word(),
        ];
    }
}
