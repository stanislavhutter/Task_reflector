<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_difficulty_effectives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_task_id')->constrained('user_tasks');
            $table->double('difficulty_value', 8 ,3);
            $table->text('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_difficulty_effectives');
    }
};
