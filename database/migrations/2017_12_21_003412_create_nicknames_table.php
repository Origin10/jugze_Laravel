<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNicknamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nicknames', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            /**
             * 說明：暱稱，在議題中亂數取得其中一隻動物
             */
            $table->increments('id');//ID
            $table->string('name');//動物名
            $table->integer('img');//存放第幾張圖片
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nicknames');
    }
}
