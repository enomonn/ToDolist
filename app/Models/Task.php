<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
    'tasks_name',
    'isComplete',
    'day_of_week',
    'post_id',
    'user_id',
];
}
