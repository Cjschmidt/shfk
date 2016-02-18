<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $table = 'ship';

    public function people(){
        return $this->hasMany('person');
    }
    public function teams(){
        return $this->hasMany('team');
    }
}