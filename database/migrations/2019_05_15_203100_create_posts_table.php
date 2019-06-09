<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->date('date');
            $table->text('text');
            $table->boolean('status')->default(1);
            $table->string('desc')->nullable(true);
            $table->string('keywords')->nullable(true);
            $table->integer('uid')->default(0);
            $table->string('meta_title')->nullable(true);
            $table->string('meta_keywords')->nullable(true);
            $table->string('meta_desc')->nullable(true);
            $table->index('uid');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
