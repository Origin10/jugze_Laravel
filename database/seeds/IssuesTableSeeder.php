<?php

use Illuminate\Database\Seeder;
use App\Issue;
class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("issues")->delete();
        for ($i=0;$i<50;$i++){
            //Issue::create([]);
        }
    }
}
