<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Person;
use Team;
use Ship;

class Division extends Model
{
    protected $table = 'division';

    public function teams(){
        return $this->hasMany('Team');
    }
    public function ships(){
        return $this->hasMany('Ship');
    }
    public function people(){
        return $this->hasMany('Person');
    }
}