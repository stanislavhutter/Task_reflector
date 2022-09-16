<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // core models
        \App\Models\User::factory(10)->create();
        \App\Models\Task::factory(10)->create();
        \App\Models\Group::factory(10)->create();
        \App\Models\UserRole::factory()->create([
            'name'=> 'Admin',
            'description'=> 'Admin user can do anything, even selling his own mother'
        ]);
        \App\Models\UserRole::factory()->create([
            'name'=> 'Peasant',
            'description'=> 'a filthy peasant, smells bad and drinks alcohol all the time'
        ]);

        // many to many models
        \App\Models\UserTask::factory(100)->create();
        \App\Models\GroupTask::factory(10)->create();
        \App\Models\GroupMember::factory(10)->create();

        // one to one relations
        \App\Models\TaskDifficultyEstimate::factory(10)->create();
        \App\Models\TaskDifficultyEffective::factory(10)->create();
        \App\Models\TaskDurationEstimate::factory(10)->create();
        \App\Models\TaskDurationEffective::factory(10)->create();


    }
}
