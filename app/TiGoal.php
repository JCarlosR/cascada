<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiGoal extends Model
{
    protected $fillable = ['description', 'dimension'];

    public function corporateGoals()
    {
        return $this->belongsToMany('App\CorporateGoal')->withTimestamps();;
    }

    public function processes()
    {
        return $this->belongsToMany('App\CobitProcess')->withTimestamps();;
    }
}
