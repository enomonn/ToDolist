<x-app-layout>   
<div class="flex bg-white p-10">
    @foreach ($goals as $goal)
               <a class ="mr-5" href={{"/goal/".$goal->id}}>{{$goal->third_goals_name}}</a>
    @endforeach
            <a href='/posts/setting'>新規作成</a>
    </div>
    
        <h1>ホーム画面</h1>
        <h2>一週間頑張ろう</h2>
         </x-app-layout>