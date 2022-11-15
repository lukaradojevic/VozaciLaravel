<?php

namespace Database\Factories;

use App\Models\Tim;
use Illuminate\Database\Eloquent\Factories\Factory;

class VozacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name(),
            'godine' => $this->faker->numberBetween($min = 18, $max = 60),
            'drzava' => $this->faker->country(),
            'titule' => $this->faker->numberBetween($min = 0, $max = 50),
            'tim_id' => Tim::factory()
        ];
    }
}
