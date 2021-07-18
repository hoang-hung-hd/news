<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category');
            $table->string('title');
            $table->string('content');
            $table->string('link');
            $table->string('image');
            $table->string('author');
            $table->timestamps();

            $table->foreign('category')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('technologies');
    }
}
