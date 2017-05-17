<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Person extends Authenticatable
{
    protected $table = 'persons';


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'division_id', 'team_id',
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

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
