<?php

use Illuminate\Database\Seeder;
use  \App\Task;
use Faker\Factory as Faker;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("zh_TW");

        //DB::table("tasks")->delete();
        Task::truncate();
//        for ($i=0;$i<50;$i++){
//            Task::create([
//                'title' => $faker->name,
//                'sub_title' => $faker->company,
//                'content' => $faker->address,
//                'page_view' => rand(0,1000),
//                'is_feature' => false,
//                'created_at' => Carbon\Carbon::now()->addDays(rand(0,10))
//            ]);
//        }
        factory(Task::class, 50)->create();
    }
}
