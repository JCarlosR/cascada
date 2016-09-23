<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateObjective extends Model
{
    protected $table = 'corporate_goal_strategic_objective';

    public function corporateGoal()
    {
        return $this->belongsTo('App\CorporateGoal', 'goal_id');
    }

    public function tiGoals()
    {
        return $this->belongsToMany('App\TiGoal', 'corporate_objective_ti', 'corporate_objective_id', 'ti_goal_id')
            ->orderBy('ti_goal_id', 'asc');;
    }
}
