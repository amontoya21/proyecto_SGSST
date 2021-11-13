<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tab_causas_amenazas extends Model
{
    use HasFactory;

    protected $table ='tab_amenazas';
    protected $fillable = [
         'id',
         'id_amenaza',
        'es_interno',
         'calificacion',
         'resultado',
         'fecha_creacion',
         'activo',
         'created_at',
         'updated_at'

  ];

}

