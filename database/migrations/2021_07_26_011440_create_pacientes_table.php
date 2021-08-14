<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('tercer_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('apellido_casada');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('direccion');
            $table->date('fecha_de_nacimiento');
            $table->string('covid');
            $table->date('fecha_de_contagio');
            $table->string('tipo_vacuna');
            $table->date('fecha_de_primera_dosis');
            $table->date('fecha_de_segunda_dosis');
            $table->string('lugar');
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
        Schema::dropIfExists('pacientes');
    }
}
