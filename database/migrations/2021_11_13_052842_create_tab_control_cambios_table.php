<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabControlCambiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_control_cambios', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_mod');
            $table->string('norma');
            $table->text('descripcion');
            $table->string('responsable_mod');
            $table->date('fecha_publicacion');

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
        Schema::dropIfExists('tab_control_cambios');
    }
}
