<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_in_issues', function (Blueprint $table) {

            $table->integer('uiId');
            $table->integer('iId')->unsigned();
            $table->integer('uId')->unsigned();
            $table->integer('nId')->unsigned();
            $table->string('uiColor');
            //0 -> 無表態； 1 -> 正方 ； 2 -> 反方
            $table->integer('uiStatus')->default(0);
            //0 -> 不擔任； 1 -> 正方 ； 2 -> 反方； 初次設定後不隨Status更換
            $table->integer('uiJudge')->default(0);
            $table->timestamps();

            $table->primary(['uiId', 'iId', 'uId']);
            $table->foreign('iId')
                ->references('iId')->on('issues')
                ->onDelete('cascade');
            $table->foreign('uId')
                ->references('uId')->on('users')
                ->onDelete('cascade');
            $table->foreign('nId')
                ->references('nId')->on('nicknames')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_in_issues');
    }
}
