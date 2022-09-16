<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDurationEffective extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_task_id',
        'duration_value',
        'notes',
    ];
}
