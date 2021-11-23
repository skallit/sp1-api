<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'firstname' => $this->faker->firstName(),
            'street' => $this->faker->streetName(),
            'postalCode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'proEmail' => $this->faker->unique()->safeEmail(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'diverLicenseNumber' => $this->faker->numberBetween(1000000,9999999),
        ];
    }
}
