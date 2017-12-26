<?php

use Illuminate\Database\Seeder;
use App\Issue;
use Faker\Factory as Faker;
class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("zh_TW");

        Issue::truncate();
        DB::table("issues")->delete();
        for ($i=0;$i<50;$i++){
            Task::create([
                'iTitle' => $faker->name,
                'iDescription' => $faker->company,
                'iCheckPoint' => rand(1,2),
                'iCheckCycle' => rand(1,2)
            ]);
        }
    }
}
