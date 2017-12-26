<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSubIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 使用者在子議題裡
         * （不需要存暱稱，因為使用者一定要參與母議題，
         *     去母議題（use_issue）抓暱稱即可）
         */
        Schema::create('user_sub_issue', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');//ID
            $table->integer('issue_id')->unsigned();//議題ID
            $table->integer('sub_issue_id')->unsigned();//子議題ID
            $table->integer('user_id')->unsigned();//使用者ID
            $table->integer('status')->default(0);//0 -> 無表態； 1 -> 正方 ； 2 -> 反方
            $table->timestamps();

            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('sub_issue_id')->references('id')->on('sub_issues')->onDelete('cascade');
            $table->foreign('user_id') ->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sub_issue');
    }
}
