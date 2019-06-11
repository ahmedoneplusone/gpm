<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    



    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function project(){
        return $this->hasMany('App\Project');
    }
}
