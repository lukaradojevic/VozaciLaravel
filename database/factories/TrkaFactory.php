<?php

namespace Database\Factories;

use App\Models\Vozac;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrkaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->colorName(),
            'grad' => $this->faker->city(),
            'drzava' => $this->faker->country(),
            'fond' => $this->faker->numberBetween($min = 10000, $max = 500000),
            'pobednik_id' => Vozac::factory(),
        ];
    }
}
