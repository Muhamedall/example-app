<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolesController extends Controller
{
 public function index (){
    return view('VolesForm');
 }
}
