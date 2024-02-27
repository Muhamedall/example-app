<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avions;
use App\Models\Airport;
//contoller : validate input ,prepare les donnes ,envoyer 
class AvionsController extends Controller
{
    public function index(){
        $avions=Avions::all();
        $airport=Airport::all();
        return view('avions',compact("avions" , "airport" ));
    }
}
