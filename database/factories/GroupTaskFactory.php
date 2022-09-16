<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupTask>
 */
class GroupTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'group_id'=>Group::all()->random()->id,
            'task_id'=>Task::all()->random()->id,
        ];
    }
}
