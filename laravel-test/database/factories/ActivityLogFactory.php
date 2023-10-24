<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::all()->random()->id,
            'activity' => '',
            'type' => $this->faker->randomElement(['login', 'logout']),
            'data' => $this->faker->text(100)
        ];
    }
}
