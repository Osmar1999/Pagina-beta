<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('tipo');
            $table->text('tecnica');
            $table->string('paciente');
            $table->string('medico');
            $table->text('diagnostico');
            $table->text('obvservaciones');
            $table->string('area');
            $table->string('fecha');
            $table->string('imagen');
            $table->string('avatar2');
            $table->string('avatar3');
            $table->string('avatar4');
            $table->string('avatar5');
            $table->string('avatar6');

            $table->unsignedBigInteger('medico_id'); 
            $table->foreign('medico_id')->references('id')->on('plantels');
            
            $table->unsignedBigInteger('paciente_id'); 
            $table->foreign('paciente_id')->references('id')->on('pacientes');

            $table->unsignedBigInteger('solicitud_id'); 
            $table->foreign('solicitud_id')->references('id')->on('solicituds');

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
        Schema::dropIfExists('informes');
    }
}
