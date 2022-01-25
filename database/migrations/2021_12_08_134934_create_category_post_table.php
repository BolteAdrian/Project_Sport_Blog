<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // migrations/****_**_**_******_create_category_post_table.php
Schema::create('category_post', function(Blueprint $table) {
    $table->integer('category_id')->unsigned();
    $table->integer('post_id')->unsigned();
    $table->primary(['category_id', 'post_id']);
    $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
    $table->foreign('post_id')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_post');
    }
}
