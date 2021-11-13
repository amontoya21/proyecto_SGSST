<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tab_amenazas extends Model
{
    use HasFactory;

    protected $table ='tab_amenazas';
    protected $fillable = [
         'id',
        'nombre',
        'area_afectada',
        'fecha_creacion',
        'activo',
        'created_at',
        'updated_at'

  ];




}
