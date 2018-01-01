<?php

use Illuminate\Database\Seeder;
use App\Cgy;
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
        Cgy::truncate();
        factory(Cgy::class, 150)->create();
    }
}
