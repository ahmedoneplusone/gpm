<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    public function students(){
        return $this->hasMany('App\Student','team_id','id');
    }

    public function project(){
        return $this->hasOne('App\Project');
    }

    public function leader(){
        return $this->hasOne('App\User','id','leader_id');
    }

}
