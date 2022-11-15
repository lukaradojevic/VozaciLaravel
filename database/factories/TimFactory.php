<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->company(),
            'sef' => $this->faker->name($gender = 'male'),
            'email' => $this->faker->unique()->safeEmail(),
            'sajt' => $this->faker->url()
        ];
    }
}
