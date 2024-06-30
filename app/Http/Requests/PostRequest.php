<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'post.third_goals_name' => 'required',
            'post.second_goals_name' => 'required',
            'post.first_goals_name' => 'required',
            'post.start_day' => 'required',
        ];
    }
}
