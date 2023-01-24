<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 200);
            $table->string('introducao');
            $table->string('descricao');
            $table->tinyInteger('status')->default(0);
            $table->string('imagem');
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users'); // FK preciso criar um campo com o nome de referencia, neste caso o user_id
            $table->foreignId('user_id')->constrained(); // FK de outro jeito
            $table->foreignId('categoria_id')->constrained(); // FK de outro jeito
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
};
