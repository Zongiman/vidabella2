<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
     
    // definicion de tabla a la cual pertenece
    protected $table = 'usuarios';
    
    // definicion de clave primaria
    protected $primaryKey = 'id_ususarios';
    
    // timestamps columnas createAt y deleteAt no implementadas
    public $timestamps = false;
    
    // definicion de columnas editables de la tabla
    protected $fillable = [
    	'nombre',
    	'telefono',
    	'email',
    ];
}
