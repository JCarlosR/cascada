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

    public function corporateObjectives()
    {
        return $this->belongsToMany('App\CorporateObjective', 'corporate_objective_ti', 'ti_goal_id', 'corporate_objective_id')
            ->withTimestamps();
    }
}
