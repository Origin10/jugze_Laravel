<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCgysTable extends Migration
{

    public function up()
    {
        Schema::create('cgys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('desc',255);
            $table->boolean('enabled');
            $table->timestamp('opened_at');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cgys');
    }
}
