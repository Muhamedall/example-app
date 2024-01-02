<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{ 
     //les fonction  on appel ACTION 
  public function index (){
    return view('home');
  }
}
