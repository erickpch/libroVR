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
        Schema::create('user_books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pseudonym');
            $table->unsignedBigInteger('headObject');
            $table->unsignedBigInteger('wearObject');
            $table->unsignedBigInteger('handObject');
            $table->unsignedBigInteger('backObject');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('headObject')->references('id')->on('avatar_objects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('wearObject')->references('id')->on('avatar_objects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('handObject')->references('id')->on('avatar_objects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('backObject')->references('id')->on('avatar_objects')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_books');
    }
};
