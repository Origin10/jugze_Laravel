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

            $table->increments('iId');
            $table->integer('uId')->unsigned();
            $table->string('iTitle');
            $table->string('iDescription');
            $table->integer('iCheckPoint')->unsigned();
            $table->integer('iCheckCycle')->default(1);
            $table->timestamps();

            $table->foreign('uId')
                ->references('uId')->on('users')
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
        Schema::dropIfExists('issues');
    }
}
