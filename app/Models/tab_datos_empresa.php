<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tab_datos_empresa extends Model
{
    use HasFactory;
      //variables protegidas
      protected $table ='tab_datos_empresas';
    protected $fillable = [
        'id',
        'tipo_indicador',
        'nombre',
        'definicion',
        'metodo_calculo',
        'unidad_medida',
        'fuente_informacion',
        'clasificacion',
        'frecuencia_medicion',
        'meta_anual',
        'interpretacion_resultado',
        'responsable',
        'deben_conocer_resultado',
        'activo',
        'created_at',
        'updated_at'

];

}
