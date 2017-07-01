<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{   
    // definicion de tabla a la cual pertenece
    protected $table = 'servicios';
    // definicion de clave primaria
    protected $primaryKey = 'id';
    // timestamps columnas createAt y deleteAt no implementadas
    public $timestamps = false;
    // // definicion de columnas editables de la tabla
    protected $fillable = [
    	'nombre',
    	'descripcion',
    	'precio',
    ];
}
