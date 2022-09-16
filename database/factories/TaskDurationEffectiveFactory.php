<?php

namespace Database\Factories;


use App\Models\UserTask;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskDurationEffective>
 */
class TaskDurationEffectiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_task_id'=>UserTask::all()->random()->id,
            'duration_value'=>fake()->numberBetween(0,20),
            'note'=>fake()->paragraph(3),
        ];
    }
}
