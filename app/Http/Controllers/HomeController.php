<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        return view('dashboard.objectives');
    }

    public function corporate()
    {
        return view('dashboard.corporate');
    }

    public function ti()
    {
        return view('dashboard.ti');
    }

    public function processes()
    {
        return view('dashboard.processes');
    }
}
