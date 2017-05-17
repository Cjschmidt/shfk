<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Authenticatable
{
    protected $table = 'teams';


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'division_id'
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

    public function ships()
    {
        return $this->belongsToMany('App\Ship');
    }

    public function persons()
    {
        return $this->hasMany('App\Person');
    }
}
