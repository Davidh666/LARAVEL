<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    protected $prymarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'ci',
        'paterno',
        'materno',
        'nombre',
        'especialidad'
    ];
}
