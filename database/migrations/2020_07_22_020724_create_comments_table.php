<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("comment_post_id");
            $table->foreignId("comment_author");
            $table->text("content");
            $table->string("status")->default("approved");
            $table->timestamps();

            $table->foreign("comment_post_id")->references("id")->on("articles")->onDelete("cascade");
            $table->foreign("comment_author")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
