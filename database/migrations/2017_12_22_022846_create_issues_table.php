<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            /**
             * 說明：議題
             */
            $table->increments('id');//ID
            $table->integer('user_id')->unsigned();//創辦人
            $table->string('title');//標題
            $table->string('description');//描述
            $table->integer('check_point')->unsigned();//第一階段結束時間 
            $table->integer('check_cycle')->default(1);//第一階段長度
            $table->integer('vote_cycle')->default(1); //第二階段長度
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
