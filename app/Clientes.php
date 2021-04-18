<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedidos;

class Clientes extends Model
{
    //RELACION 1 A MUCHOS
    function Pedidos(){
        return $this->hasMany(Pedidos::class);
    }
}
