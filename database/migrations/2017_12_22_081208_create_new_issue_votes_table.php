<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewIssueVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_issue_votes', function (Blueprint $table) {

            $table->integer('nivId');
            $table->integer('niId');
            $table->integer('iId')->unsigned();
            $table->integer('nivTitle');
            $table->timestamps();

            $table->primary(['nivId', 'niId', 'iId']);
            $table->foreign('iId')
                ->references('iId')->on('issues')
                ->onDelete('cascade');
            $table->foreign('niId')
                ->references('niId')->on('new_issues')
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
        Schema::dropIfExists('new_issue_votes');
    }
}
