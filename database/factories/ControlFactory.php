<?php

namespace Database\Factories;

use App\Models\Vehicle;
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
            'vehicle_id'=>Vehicle::inRandomOrder()->first()->id,
        ];
    }
}
