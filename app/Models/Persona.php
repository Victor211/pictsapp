<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $primaryKey = 'id_persona';
    //public $incrementing = false;
    //public $timestamps = false;

    protected $fillable = [

        'id_tutor',
        'id_ciudad',
        'id_barrio',
        'ci_persona',
        'nombres_apellidos',
        'es_paciente',
        'edad',
        'id_vinculo',
        'direccion',
        'telefono',
        'estado',
        'fecha_creacion',
        'fecha_edicion'
    ];
}
