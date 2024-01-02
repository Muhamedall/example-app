<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avions;

class AvionsController extends Controller
{
    public function index(){
        $avions=Avions::all();
       
        return view('avions',compact("avions"));
    }
}
