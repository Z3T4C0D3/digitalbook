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
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id_libro');
            $table->string("nombre_libro");
            $table->string("codigo")->nullable();
            $table->unsignedBigInteger('anio_publicacion')->nullable();
            //FOREIGN KEY
            $table->unsignedBigInteger('id_clasificacion');
            $table->unsignedBigInteger('id_editorial');
            //RESTRICCION DE FK
            $table->foreign('id_clasificacion')->references('id_clasificacion')->on('clasificaciones')->onDelete('cascade');
            $table->foreign('id_editorial')->references('id_editorial')->on('editoriales')->onDelete('cascade');
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
        Schema::dropIfExists('libros');
    }
};
