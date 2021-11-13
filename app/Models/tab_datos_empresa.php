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
       'razon_social',
       'NIT',
       'latitud',
       'longitud',
       'actividad_economica',
       'nivel_riesgo',
       'cantidad_trabajadores',
       'naturaleza_juridica',
       'telefono1',
       'telefono2',
       'telefono3',
       'direccion',
       'email',
       'pagina_web',
       'tipo_empresa',
        'activo',
        'created_at',
        'updated_at'

];

}
