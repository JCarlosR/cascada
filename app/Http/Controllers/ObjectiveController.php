<?php

namespace App\Http\Controllers;

use App\StrategicObjective;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ObjectiveController extends Controller
{

    public function index()
    {
        $objectives = StrategicObjective::where('user_id', Auth::user()->id)
            ->orderBy('dimension')
            ->get();
        return $objectives;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:5|max:255'
        ], [
            'description.required' => 'Es necesario que ingrese una descripción.',
            'description.min' => 'Ingrese al menos 5 caracteres como descripción.',
            'description.max' => 'La descripción no debe exceder los 255 caracteres.'
        ]);

        $newObjective = StrategicObjective::create([
            'description' => $request->get('description'),
            'dimension' => $request->get('dimension'),
            'user_id' => Auth::user()->id
        ]);

        $data['success'] = true;
        $data['newObjective'] = $newObjective;

        return $data;
    }

    public function destroy(Request $request) {
        $id = $request->get('objective_id');
        $objective = StrategicObjective::find($id);
        $user_id = Auth::user()->id;
        if ($objective && $objective->user_id == $user_id) {
            $objective->delete();
            $data['success'] = true;
            return $data;
        }

        $data['success'] = false;
        return $data;
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:5|max:255'
        ], [
            'description.required' => 'Es necesario que ingrese una descripción.',
            'description.min' => 'Ingrese al menos 5 caracteres como descripción.',
            'description.max' => 'La descripción no debe exceder los 255 caracteres.'
        ]);

        $objective = StrategicObjective::find($request->get('id'));
        if ($objective) {
            $objective->description = $request->get('description');
            $objective->dimension = $request->get('dimension');
            $objective->save();
            $data['success'] = true;

        } else {
            $data['success'] = false;
        }

        return $data;
    }

    public function align(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:5|max:255'
        ], [
            'description.required' => 'Es necesario que ingrese una descripción.',
            'description.min' => 'Ingrese al menos 5 caracteres como descripción.',
            'description.max' => 'La descripción no debe exceder los 255 caracteres.'
        ]);

        $id = $request->get('id');
        $objective = StrategicObjective::find($id);
        $objective->aligned = $request->get('description');
        $objective->save();

        return back();
    }
}
