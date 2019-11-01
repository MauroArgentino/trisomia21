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
            $table->string('titulo');
            $table->string('slug', 191)->unique();
            $table->mediumText('contenido');
            $table->string('extracto')->nullable();
            $table->enum('estado', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->string('ruta_imagen')->nullable();
            $table->date('fechaPublicado')->nullable();
            $table->unsignedBigInteger('user_create_id');
            $table->unsignedBigInteger('user_modified_id')->nullable();
            $table->timestamps();

            $table->foreign('user_create_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('user_modified_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
