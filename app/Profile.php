<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    //relacion 1 a 1 

    public function User(){
        $this->BelongsTo(User::class);
    }

}
