<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Model::unguard();
//        DB::statment();

        //$this->call(UsersTableSeeder::class);
//        $this->call(IssuesTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(CgysTableSeeder::class);
        $this->call(TodoTableSeeder::class);

    }
}
