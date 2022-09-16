<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->randomElement(['do some Work','get a coffee','sleep']),
            'description' => fake()->paragraph(3),
            'visibility' => fake()->randomElement(['pritave','public','group']),
            
        ];
    }
}
