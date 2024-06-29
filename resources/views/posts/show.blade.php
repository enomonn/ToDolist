<x-app-layout>   
<div class="flex bg-white p-10">
    <a class ="mr-5" href={{"/goal/".$goal->id}}>{{$goal->third_goals_name}}</a>
    <a class ="mr-5" href="/">ホーム</a>
    <a class ="mr-5" href="/posts/{{ $goal->id }}/edit">編集</a>
 <form class ="mr-5" action="/posts/{{ $goal->id }}" id="form_{{ $goal->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="button" onclick="deletePost({{ $goal->id }})">削除</button> 
 </form>
    
 <script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
           }
        }
</script>

    
        
</div>

<div>
        <h2>1日目</h2>
    <div class='task_name_1'>
        @foreach ($day1_tasks as $task)
           <h3>{{ $task->task_name }}</h3>
           <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
           @csrf
           @method('DELETE')
           <button type="submit">削除</button> 
           </form>
        @endforeach
    </div>
        
         <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value="{{ old('task', $goal->task_name) }}"/>
           <input type="hidden" name="day" placeholder="タスク"value=1 />
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
<div>
    
        <h2>2日目</h2>
        
    <div class='task_name_2'>
        @foreach ($day2_tasks as $task)
        <h3>{{ $task->task_name }}</h3>
        <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button> 
        </form>
        @endforeach
    </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=2 />
           <input type="submit" value="設定完了"/>
           </form>
    </div>
    
    <div>
        <h2>3日目</h2>
        
         <div class='task_name_3'>
        @foreach ($day3_tasks as $task)
        <h3>{{ $task->task_name }}</h3>
        <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button> 
        </form>
        @endforeach
    </div>
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=3 />
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>4日目</h2>
         <div class='task_name_4'>
        @foreach ($day4_tasks as $task)
        <h3>{{ $task->task_name }}</h3>
        <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button> 
        </form>
        @endforeach
    </div>
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=4 />
           <input type="submit" value="設定完了"/>
           </form>
    </div>
    <div>
        <h2>5日目</h2>
         <div class='task_name_5'>
        @foreach ($day5_tasks as $task)
        <h3>{{ $task->task_name }}</h3>
        <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button> 
        </form>
        @endforeach
    </div>
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=5 />
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>6日目</h2>
        <div class='task_name_6'>
        @foreach ($day6_tasks as $task)
        <h3>{{ $task->task_name }}</h3>
        <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
           @csrf
           @method('DELETE')
           <button type="submit">削除</button> 
        </form>
        @endforeach
       </div>
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=6 />
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    <div>
        <h2>7日目</h2>
        <div class='task_name_7'>
            @foreach ($day7_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=7/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>8日目</h2>
        <div class='task_name_8'>
            @foreach ($day8_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=8/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>9日目</h2>
        <div class='task_name_9'>
            @foreach ($day9_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=9/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>10日目</h2>
        <div class='task_name_10'>
            @foreach ($day10_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=10/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>11日目</h2>
        <div class='task_name_11'>
            @foreach ($day11_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=11/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>12日目</h2>
        <div class='task_name_12'>
            @foreach ($day12_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=12/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>13日目</h2>
        <div class='task_name_13'>
            @foreach ($day13_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=13/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>14日目</h2>
        <div class='task_name_14'>
            @foreach ($day14_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=14/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>15日目</h2>
        <div class='task_name_15'>
            @foreach ($day15_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=15/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>16日目</h2>
        <div class='task_name_16'>
            @foreach ($day16_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=16/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>17日目</h2>
        <div class='task_name_17'>
            @foreach ($day17_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=17/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>18日目</h2>
        <div class='task_name_18'>
            @foreach ($day18_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=18/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>19日目</h2>
        <div class='task_name_19'>
            @foreach ($day19_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=19/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>20日目</h2>
        <div class='task_name_20'>
            @foreach ($day20_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=20/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div>
        <h2>21日目</h2>
        <div class='task_name_21'>
            @foreach ($day21_tasks as $task)
            <h3>{{ $task->task_name }}</h3>
            <form action="/tasks/{{ $task->id }}/{{$goal->id}}" id="form_{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
            </form>
            @endforeach
        </div>
        
        <form action={{"/tasks/".$goal->id}} method="POST">
            @csrf
           <input type="text" name="task" placeholder="タスク"value=""/>
           <input type="hidden" name="day" placeholder="タスク"value=21/>
           <input type="submit" value="設定完了"/>
        </form>
    </div>
    
    <div class="">
            <a href="">戻る</a>
    </div>
    <div class="">
            <a href="">全て完了</a>
    </div>
         </x-app-layout>