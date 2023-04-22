<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;
    protected $table = 'barrios';
    protected $primaryKey = 'id_barrio';
    //public $incrementing = false;
    //public $timestamps = false;
    protected $fillable = [
        'id_ciudad',
        'nombre',
        'estado'
    ];

}
