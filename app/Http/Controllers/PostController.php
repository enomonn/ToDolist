<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest; 
use Auth;
use App\Models\Task;
class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['goals'=>$post->get()]);
    }
    public function setting(Post $goal)
    {
        return view('posts.setting')->with(['goal'=>$goal]);
    }
    public function show(Post $goal)
    {
        $day1_tasks=$goal->tasks()->where('day_of_week',1)->get();
        $day2_tasks=$goal->tasks()->where('day_of_week',2)->get();
        $day3_tasks=$goal->tasks()->where('day_of_week',3)->get();
        $day4_tasks=$goal->tasks()->where('day_of_week',4)->get();
        $day5_tasks=$goal->tasks()->where('day_of_week',5)->get();
        $day6_tasks=$goal->tasks()->where('day_of_week',6)->get();
        $day7_tasks=$goal->tasks()->where('day_of_week',7)->get();
        $day8_tasks=$goal->tasks()->where('day_of_week',8)->get();
        $day9_tasks=$goal->tasks()->where('day_of_week',9)->get();
        $day10_tasks=$goal->tasks()->where('day_of_week',10)->get();
        $day11_tasks=$goal->tasks()->where('day_of_week',11)->get();
        $day12_tasks=$goal->tasks()->where('day_of_week',12)->get();
        $day13_tasks=$goal->tasks()->where('day_of_week',13)->get();
        $day14_tasks=$goal->tasks()->where('day_of_week',14)->get();
        $day15_tasks=$goal->tasks()->where('day_of_week',15)->get();
        $day16_tasks=$goal->tasks()->where('day_of_week',16)->get();
        $day17_tasks=$goal->tasks()->where('day_of_week',17)->get();
        $day18_tasks=$goal->tasks()->where('day_of_week',18)->get();
        $day19_tasks=$goal->tasks()->where('day_of_week',19)->get();
        $day20_tasks=$goal->tasks()->where('day_of_week',20)->get();
        $day21_tasks=$goal->tasks()->where('day_of_week',21)->get();
        return view('posts.show')->with(['goal'=>$goal,'goals'=>$goal->get(),
        'day1_tasks'=>$day1_tasks,
        'day2_tasks'=>$day2_tasks,
        'day3_tasks'=>$day3_tasks,
        'day4_tasks'=>$day4_tasks,
        'day5_tasks'=>$day5_tasks,
        'day6_tasks'=>$day6_tasks,
        'day7_tasks'=>$day7_tasks,
        'day8_tasks'=>$day8_tasks,
        'day9_tasks'=>$day9_tasks,
        'day10_tasks'=>$day10_tasks,
        'day11_tasks'=>$day11_tasks,
        'day12_tasks'=>$day12_tasks,
        'day13_tasks'=>$day13_tasks,
        'day14_tasks'=>$day14_tasks,
        'day15_tasks'=>$day15_tasks,
        'day16_tasks'=>$day16_tasks,
        'day17_tasks'=>$day17_tasks,
        'day18_tasks'=>$day18_tasks,
        'day19_tasks'=>$day19_tasks,
        'day20_tasks'=>$day20_tasks,
        'day21_tasks'=>$day21_tasks,
        ]);
    }
    public function edit(Post $goal)
    {
    return view('posts.edit')->with(['goal' => $goal]);
        
    }
    public function update(PostRequest $request, Post $goal)
    {
    $input_post = $request['post'];
    $goal->fill($input_post)->update();

    return redirect('/');
    }
    public function delete(Post $goal)
    {
    $goal->delete();
    return redirect('/');
    }
    public function delete_task(Task $task,Post $goal)
    {
    $task->delete();
    return redirect('/goal/'.$goal->id) ;
    }
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $input['user_id']=Auth::id();
        $post->fill($input)->save();
        return redirect('/');
    }
    public function store_task(Task $task, Request $request,Post $goal)
    {
        $task->post_id=$goal->id;
        $task->isComplete=false;
        $task->user_id=Auth::id();
        $task->task_name=$request->task;
        $task->day_of_week=intval($request->day);;
        $task->save();
        return redirect('/goal/'.$goal->id);
    }
}
