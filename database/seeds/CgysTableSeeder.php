<?php

use Illuminate\Database\Seeder;
use App\Cgys;
class CgysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cgys::truncate();
        factory(User::class, 150)->create();
    }
}
