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
            $table->timestamp('created_at');//SQLSTATE[42S21]: Column already exists: 1060 Duplicate column name 'created_at'
            $table->timestamp('updated_at');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cgys');
    }
}
