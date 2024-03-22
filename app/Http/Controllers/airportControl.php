<?php

namespace App\Http\Controllers;

use App\Models\airport;
use Illuminate\Http\Request;

class airportControl extends Controller
{
    public function index()
    {
        $airport=airport::all();
        return view('insertVole', compact('airport'));
    }
}
