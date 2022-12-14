<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => implode(" ", $this->faker->words($this->faker->numberBetween(1, 6))),
            'semester' => $this->faker->numberBetween(1, 7),
            'is_active' => $this->faker->boolean(80)
        ];
    }
}
