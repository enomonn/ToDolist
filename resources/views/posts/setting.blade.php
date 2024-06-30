<x-app-layout>   
<div class="flex bg-white p-10">
               <a href={{"/goal1/".$goal->id}}>{{$goal->goals_name}}</a>
    </div>
    
        <h1>目標を細分化しよう！</h1>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>最終目標</h2>
                <input type="text" name="post[third_goals_name]" placeholder="最終目標"value="{{ old('post.third_goals_name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.third_goals_name') }}</p>
            </div>
            <div>
                <h2>二週目目標</h2>
                <input type="text" name="post[second_goals_name]" placeholder="二週目目標"value="{{ old('post.second_goals_name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.second_goals_name') }}</p>
            </div>
            <div>
                <h2>一週目目標</h2>
                <input type="text" name="post[first_goals_name]" placeholder="一週目目標"value="{{ old('post.first_goals_name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.first_goals_name') }}</p>
            </div>
            <div>
                <h2>開始日</h2>
                <input type="date" name="post[start_day]" value="{{ old('start_day') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.start_day') }}</p>
            </div>
            
            <input type="submit" value="設定完了"/>
            
        </form>
        <div class="back">
            <a href="/">戻る</a>
        </div>
         </x-app-layout>