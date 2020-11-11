<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'name', 'model_id', 'description',
    ];
    public function work()
    {
        return $this->belongsTo('App\CompetitiveWorks');
    }
}
