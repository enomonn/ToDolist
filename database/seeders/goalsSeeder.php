<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;
class goalsSeeder extends Seeder
{
   
    public function run()
    {
     DB::table('goals')->insert([
                'first_goals_name' => '体重10kg減らす',
                'second_goals_name' => '体重20kg減らす!',
                'third_goals_name' => '体重30kg減らす!!',
                'start_day' => '20240609',
                'user_id'   => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
