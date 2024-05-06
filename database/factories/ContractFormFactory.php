<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFormFactory extends Factory
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
            'amountOfCosts' => $this->faker->randomFloat(3,1,2),
            'maxAccount'=>$this->faker->numberBetween(0,100),
        ];
    }
}
