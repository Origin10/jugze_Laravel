<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewIssueVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_issue_voters', function (Blueprint $table) {

            $table->integer('nivId');
            $table->integer('niId');
            $table->integer('iId')->unsigned();
            $table->integer('uId')->unsigned();
            $table->timestamps();

            $table->primary(['nivId', 'niId', 'iId', 'uId']);
            $table->foreign('iId')
                ->references('iId')->on('issues')
                ->onDelete('cascade');
            $table->foreign('niId')
                ->references('niId')->on('new_issues')
                ->onDelete('cascade');
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
        Schema::dropIfExists('new_issue_voters');
    }
}
