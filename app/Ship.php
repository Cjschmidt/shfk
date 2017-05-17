<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ship extends Authenticatable
{

    protected $table = 'ships';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'division_id', 'slots', 'slots_day_two'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ ];

    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }

}
