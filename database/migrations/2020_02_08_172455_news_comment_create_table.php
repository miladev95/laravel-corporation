<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsCommentCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("news_comment",function (Blueprint $table){
           $table->bigIncrements("id");
           $table->integer("news_id");
           $table->string("name");
           $table->string("email");
           $table->text("comment");
            $table->string("date");
            $table->integer("comment_status");
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
        Schema::dropIfExists("news_comment");
    }
}
