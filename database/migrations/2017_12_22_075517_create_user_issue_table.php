<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_issue', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            /**
             * 說明：參與議題的使用者
             */
            $table->increments('id');//ID
            $table->integer('issue_id')->unsigned();//議題ID
            $table->integer('user_id')->unsigned();//使用者ID
            $table->integer('nickname_id')->unsigned();//暱稱ID
            $table->string('color');//顏色亂數，#000000 - #FFFFFF 同一議題不重複即可
            $table->integer('seq');//用來當作參與者的編號
            $table->integer('status')->default(0);//0 -> 無表態； 1 -> 正方 ； 2 -> 反方
            $table->integer('judge')->default(0);//0 -> 不擔任； 1 -> 正方 ； 2 -> 反方； 初次設定後不隨Status更換
            $table->timestamps();

            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('nickname_id') ->references('id')->on('nicknames')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_issue');
    }
}
