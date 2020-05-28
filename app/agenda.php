<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    //
    public function scopeNombres($query,$nombres){

        if($nombres){

            return $query->where('nombres','like',"%$nombres%");

        }

    }

    public function scopeApellidos($query,$apellidos){

        if($apellidos){

            return $query->where('apellidos','like',"%$apellidos%");

        }

    }

    public function scopeTelefono($query,$telefono){

        if($telefono){

            return $query->where('telefono','like',"%$telefono%");

        }

    }

}
