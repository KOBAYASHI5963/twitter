<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFollowTable extends Migration
{
  
    public function up()
    {
        Schema::create('user_follow', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->unsignedBigInteger('follow_id')->unsigned()->index();
            $table->timestamps();

            // 外部キー設定
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');

            // user_idとfollow_idの組み合わせの重複を許さない
            $table->unique(['user_id', 'follow_id']);
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('user_follow');
    }
}