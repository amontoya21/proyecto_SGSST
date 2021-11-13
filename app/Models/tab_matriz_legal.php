<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tab_matriz_legal extends Model
{
    use HasFactory;
    //variables protegidas
    protected $table ='tab_matriz_legals';
    protected $fillable = [
        'id',
        'tipo',
        'nombre',
        'sector_economico',
        'clasificacion',
        'tema_general',
        'subtema',
        'año',
        'tipo_num',
        'fecha',
        'expedida_por',
        'articulo',
        'estado',
        'info',
        'descripcion_art',
        'created_at',
        'updated_at'

];
}
