<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitiveWorks extends Model
{
    protected $fillable = [
         'name', 'club_id', 'description', 'user_id',
    ];
    public function picture()
    {
        return $this->hasMany('App\Picture');
    }
}
