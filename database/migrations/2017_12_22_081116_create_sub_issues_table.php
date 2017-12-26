<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 子議題，
         * 母議題狀態一結束後生成，user_id、title、description暫時為null。
         * 狀態二結束，選出新議題後，填入usr_id、title，由該得票最高之使用者自行填入description
         */
        Schema::create('sub_issues', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');//ID
            $table->integer('issue_id')->unsigned();//議題ID
            $table->integer('status');// 1 -> 正方 ； 2 -> 反方 的延伸議題
            $table->integer('deadline');//第二階段結束時間
            $table->integer('start_pos');//第一階段結束正方票數
            $table->integer('start_neg');//第一階段結束反方票數
            $table->integer('end_pos');//第二階段結束正方票數
            $table->integer('end_neg');//第二階段結束反方票數
            $table->integer('user_id')->unsigned()->nullable();//得票最高使用者ID
            $table->string('title')->nullable();//得票最高標題
            $table->string('description')->nullable();//得票最高使用者填入描述
            $table->timestamps();

            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_issues');
    }
}
