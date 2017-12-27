<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubIssueVoterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 說明：子議題提案的投票
         * 舉例：母議題 "1" 裡面的子議題 "1" ，使用者 "5" 提出 "XXXX" 標題提案，被使用者 "5" 投一票
         * 舉例：母議題 "1" 裡面的子議題 "1" ，使用者 "5" 提出 "XXXX" 標題提案，被使用者 "7" 投一票
         * 舉例：母議題 "1" 裡面的子議題 "1" ，使用者 "3" 提出 "XXXY" 標題提案，被使用者 "1" 投一票
         */
        Schema::create('sub_issue_voter', function (Blueprint $table) {//這張表單的作用是？
            $table->engine = 'InnoDB';

            $table->increments('id');//ID
            $table->integer('issue_id')->unsigned();//議題ID
            $table->integer('sub_issue_id')->unsigned();//子議題ID
            $table->integer('user_id')->unsigned();//這是提出該標題的人
            $table->integer('voter_id')->unsigned();//這是投票人
            $table->timestamps();

            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('sub_issue_id')->references('id')->on('sub_issues')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('voter_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_issue_voter');
    }
}
