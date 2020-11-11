<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

    protected $fillable = [
        'club_name', 'company_name', 'participants_number', 'description', 'user_id',
    ];
    public function user()
    {
        return $this->hasOne('App\User', 'user_id');
    }
    public function route()
    {
        return $this->hasMany('App\TouristRoute');
    }
}
