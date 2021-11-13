<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_indicadores', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_indicador');
            $table->string('nombre', 100);
            $table->string('definicion');
            $table->string('metodo_calculo');
            $table->string('unidad_medida');
            $table->string('fuente_informacion');
            $table->string('clasificacion');
            $table->string('frecuencia_medicion');
            $table->string('meta_anual');
            $table->string('interpretacion_resultado');
            $table->string('responsable');
            $table->string('deben_conocer_resultado');
            $table->boolean('activo');
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
        Schema::dropIfExists('tab_indicadores');
    }
}
