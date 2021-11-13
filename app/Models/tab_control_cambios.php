<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tab_control_cambios extends Model
{
    use HasFactory;
      //variables protegidas
      protected $table ='tab_control_cambios';
    protected $fillable = [
        'id',
        'fecha_mod',
        'norma',
        'descripcion',
        'responsable_mod',
        'fecha_publicacion',
        'created_at',
        'updated_at'

];

}
