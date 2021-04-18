<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clientes;


class Pedidos extends Model
{
    //relacion 1 a muchos
    function Clientes(){
        return $this->BelongsTo(Clientes::class);
    }
}
