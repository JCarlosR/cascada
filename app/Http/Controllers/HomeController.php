<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\StrategicObjective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function objectives()
    {
        $user = Auth::user();
        $objectives = $user->objectives;
        return view('dashboard.objectives')->with(compact('objectives'));
    }

    public function corporate()
    {
        $user = Auth::user();
        $objectives = $user->objectives;
        return view('dashboard.corporate')->with(compact('objectives'));
    }

    public function ti()
    {
        $user = Auth::user();
        $objectives = $user->objectives;
        return view('dashboard.ti')->with(compact('objectives'));
    }

    public function processes()
    {
        $user = Auth::user();
        $objectives = $user->objectives;
        return view('dashboard.processes')->with(compact('objectives'));
    }
}
