<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Task;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupMember>
 */
class GroupMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>User::all()->random()->id,
            'group_id'=>Group::all()->random()->id,
            'user_role_id'=>UserRole::all()->random()->id,
        ];
    }
}
