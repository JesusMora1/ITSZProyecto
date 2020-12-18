<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesor__proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_asesor');
            $table->integer('id_docente')->unsigned();            
            $table->foreign('id_docente')->references('id')->on('docente');
            $table->integer('id_proyecto')->unsigned();            
            $table->foreign('id_proyecto')->references('id')->on('proyecto');
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
        Schema::dropIfExists('asesor__proyectos');
    }
}
