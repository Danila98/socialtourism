<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristRoute extends Model
{
    protected $fillable = [
        'name', 'club_id', 'description', 'time',
    ];
    public function club()
    {
        return $this->belongsTo('App\Club');
    }
}
