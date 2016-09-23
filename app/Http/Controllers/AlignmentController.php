<?php

namespace App\Http\Controllers;

use App\CorporateObjective;
use App\StrategicObjective;
use App\TiGoal;
use Illuminate\Http\Request;

use App\Http\Requests;

class AlignmentController extends Controller
{

    public function objectiveWithCorporate(Request $request)
    {
        $objective_id = $request->get('objective_id');
        $corporate_goal_id = $request->get('corporate_goal_id');
        $state = $request->get('state'); // ON or OFF
        $objective = StrategicObjective::find($objective_id);

        if ($state == 'true') { // ON
            if (!$objective->corporateGoals->contains($corporate_goal_id))
                $objective->corporateGoals()->attach($corporate_goal_id);

        } else // OFF
            $objective->corporateGoals()->detach($corporate_goal_id);

        $data['success'] = true;
        return $data;
    }

    public function objectiveCorporateTi(Request $request)
    {
        $ti_goal_id = $request->get('ti_goal_id');
        $corporate_goal_id = $request->get('corporate_goal_id');
        $objective_id = $request->get('objective_id');

        $corporate_objective_id = CorporateObjective::where('goal_id', $corporate_goal_id)->where('objective_id', $objective_id)
                                    ->first()->id;
        $state = $request->get('state'); // ON or OFF

        $ti_goal = TiGoal::find($ti_goal_id);

        if ($state == 'true') // ON
            if (!$ti_goal->corporateObjectives->contains($corporate_objective_id))
                $ti_goal->corporateObjectives()->attach($corporate_objective_id);
        else // OFF
            $ti_goal->corporateObjectives()->detach($corporate_objective_id);

        $data['success'] = true;
        return $data;
    }
}
