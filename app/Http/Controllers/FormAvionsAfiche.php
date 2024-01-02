<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAvionsAfiche extends Controller
{
    public function index(){
        return view("Formavions");
    }
}
