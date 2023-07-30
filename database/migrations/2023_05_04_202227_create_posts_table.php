<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->text('post_excerpt');
            $table->text('post_content');
            $table->string('post_thumbnail');
            $table->string('post_link');
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->timestamps();

            //$table->index('cat_id', 'post_category_idv');
            //$table->foreign('cat_id', 'post_category_id_fk')->on('categories')->references('id');
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
};
