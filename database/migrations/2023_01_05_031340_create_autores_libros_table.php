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
        Schema::create('autores_libros', function (Blueprint $table) {
            $table->bigIncrements('id_info_libro');
            $table->unsignedBigInteger('id_libro');
            $table->unsignedBigInteger('id_autor');
            
            $table->foreign('id_libro')->references('id_libro')->on('libros')->onDelete('cascade');
            $table->foreign('id_autor')->references('id_autor')->on('autores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autores_libros');
    }
};
