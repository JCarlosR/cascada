<?php

namespace App\Http\Controllers;

use App\StrategicObjective;
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

        if ($state == 'true') // ON
            $objective->corporateGoals()->attach($corporate_goal_id);
        else // OFF
            $objective->corporateGoals()->detach($corporate_goal_id);

        $data['success'] = true;
        return $data;
    }

}
