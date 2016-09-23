<?php

namespace App\Http\Controllers;

use App\CorporateObjective;
use App\StrategicObjective;
use Illuminate\Http\Request;

use App\Http\Requests;

class TiGoalController extends Controller
{
    public function byStrategicObjective($id)
    {
        $objective = StrategicObjective::find($id);
        $corporate_goals = $objective->corporateGoals;
        foreach($corporate_goals as $corporate_goal) {
            $ti_goals = $corporate_goal->tiGoals;
            $corporate_goal->ti_goals = $ti_goals;

            foreach($ti_goals as $ti_goal) {
                $corporate_objective = CorporateObjective::where('goal_id', $corporate_goal->id)->where('objective_id', $id)->first();
                $ti_goal->associated = $ti_goal->corporateObjectives->contains($corporate_objective);
            }
        }
        return $corporate_goals;
    }
}
