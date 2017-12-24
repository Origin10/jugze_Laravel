<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_issues', function (Blueprint $table) {

            $table->integer('niId');
            $table->integer('iId')->unsigned();
            $table->integer('niDeadline');
            $table->integer('niStartPos');
            $table->integer('niStartNeg');
            $table->integer('niEndPos');
            $table->integer('niEndNeg');
            $table->timestamps();

            $table->primary(['niId', 'iId']);
            $table->foreign('iId')
                ->references('iId')->on('issues')
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
        Schema::dropIfExists('new_issues');
    }
}
