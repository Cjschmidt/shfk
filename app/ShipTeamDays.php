<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ShipTeamDays extends Authenticatable
{

    protected $table = 'ship_team_days';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day', 'team_id', 'ship_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ ];

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function ship()
    {
        return $this->belongsTo('App\Ship');
    }

}
