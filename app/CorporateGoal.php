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

    public function strategicObjectives()
    {
        return $this->belongsToMany('App\StrategicObjective', 'corporate_goal_strategic_objective', 'goal_id', 'objective_id');
    }
}
