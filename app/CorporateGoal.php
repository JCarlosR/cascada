<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateGoal extends Model
{
    protected $fillable = ['description', 'dimension'];

    public function tiGoals()
    {
        return $this->belongsToMany('App\TiGoal')->withTimestamps();;
    }

}
