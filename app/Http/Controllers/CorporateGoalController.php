<?php

namespace App\Http\Controllers;

use App\CorporateGoal;
use App\StrategicObjective;
use Illuminate\Http\Request;

use App\Http\Requests;

class CorporateGoalController extends Controller
{

    public function byDimension($d) {
        $goals = CorporateGoal::where('dimension', $d)->get();
        return $goals;
    }

    public function byDimensionAndObjective($d, $o) {
        $goals = CorporateGoal::where('dimension', $d)->get();

        // Check current relationships
        $objective = StrategicObjective::find($o);
        foreach ($goals as $goal) {
            $goal->associated = $objective->corporateGoals->contains($goal);
        }

        $data['goals'] = $goals;
        $data['description'] = $objective->aligned_description;
        return $data;
    }

}
