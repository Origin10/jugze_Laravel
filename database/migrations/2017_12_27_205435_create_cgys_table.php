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
            $table->string('title',255)->default('default');
            $table->string('desc',255)->nullable();
            $table->boolean('enabled')->default(true);
            $table->timestamp('opened_at')->default(\Carbon\Carbon::now());
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cgys');
    }
}
