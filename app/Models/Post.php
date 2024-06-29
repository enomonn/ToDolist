<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ="goals";
    protected $fillable = [
    'first_goals_name',
    'second_goals_name',
    'third_goals_name',
    'start_day',
    'user_id',
];
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    
}
