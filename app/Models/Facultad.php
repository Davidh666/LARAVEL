<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table  = 'facultades';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable =[
        'nombre',
        'descripcion'
    ];
}
