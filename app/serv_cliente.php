<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serv_cliente extends Model
{
    // definicion de tabla a la cual pertenece
    protected $table = 'serv_cliente';
    
    // definicion de clave primaria
    protected $primaryKey = 'fecha';
    
    //definicion de clave foranea
    protected $foreing= 'id_usuario';
    protected $foreing= 'id_servicio'

}
