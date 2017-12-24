<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('uId');
            $table->string('uAccount', 100)->unique();
            $table->string('uPassword');
            $table->boolean('uFacebookUser');
            $table->string('uEmail');
            $table->string('uName');
            $table->boolean('uCommentPrivate')->default(true);
            $table->boolean('uAdmin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
