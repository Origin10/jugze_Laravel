<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//整體來看表格和欄位名稱可以討論看看是否調整，另外複合主鍵應慎用，這將導致CRUD時程式變得較為複雜
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
            $table->engine = 'InnoDB';

            /**
             * 說明：使用者
             */
            $table->increments('id');//ID
            $table->string('username', 100)->unique(); //帳號
            $table->string('pwd');//密碼
            $table->string('fb_id')->nullable();//與FB連動
            $table->string('email')->unique();//信箱（預設與帳號相同，當與FB連動後使用FB信箱
            $table->string('nickname');//稱呼
            $table->boolean('is_comment_public')->default(false);//是否公開留言
            $table->string('groups')->default('user');//權限角色
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
