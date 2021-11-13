<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabDatosEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_datos_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 100);
            $table->string('NIT', 100);
            $table->string('latitud');
            $table->string('longitud');
            $table->string('actividad_economica');
            $table->string('nivel_riesgo');
            $table->string('cantidad_trabajadores');
            $table->string('naturaleza_juridica');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('telefono3');
            $table->string('direccion');
            $table->string('email', 100);
            $table->string('pagina_web');
            $table->string('tipo_empresa');
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
        Schema::dropIfExists('tab_datos_empresas');
    }
}
