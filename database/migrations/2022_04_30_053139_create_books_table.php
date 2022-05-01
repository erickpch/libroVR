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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('avatarObjectId');
            $table->unsignedBigInteger('category_id');
            $table->string('publication');
            $table->string('music');
            $table->string('portrait');
            $table->longText('phrase');
            $table->string('author');
            

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('avatarObjectId')->references('id')->on('avatar_objects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
