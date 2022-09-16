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
            'description'=> 'Admin user can do anything'
        ]);
        \App\Models\UserRole::factory()->create([
            'name'=> 'Peasant',
            'description'=> 'a filthy peasant, smells and drinks alcohol all the time'
        ]);

        // many to many models
        \App\Models\UserTask::factory(10)->create();
        \App\Models\GroupTask::factory(10)->create();
        \App\Models\GroupMember::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
