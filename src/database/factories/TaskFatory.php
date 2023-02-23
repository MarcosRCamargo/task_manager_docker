<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFatory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(300),
            'start_date' => now(),
            'end_estimate_date' => fake()->dateTimeThisMonth('+15 days'),
            'end_date' => null,
            'status' => 1,
            'owner' => 1,
            'delegated_user' => 2,
        ];
    }

}
