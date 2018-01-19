<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        return view('auction.index');
    }

    public function create()
    {
        return view('auction.create');
    }
}
