<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido_y_nombres');
            $table->string('email');
            $table->string('asunto');
            $table->mediumtext('mensaje');
            $table->enum('estado', ['LEIDO', 'NO_LEIDO'])->default('NO_LEIDO');
            $table->enum('ubicacion', ['INBOX', 'TRASH']);
            $table->unsignedBigInteger('user_read_id')->nullable();
            $table->timestamps();

            $table->foreign('user_read_id')->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}

