<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanderController extends Controller
{
    public function index()
    {
        return view('lander.index');
    }
}
