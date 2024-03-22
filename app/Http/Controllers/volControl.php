<?php

namespace App\Http\Controllers;

use App\Models\vole;
use Illuminate\Http\Request;

class volControl extends Controller
{
  
    public function prepareInsert()
    {
        $voles=vole::all();
        return view('/insertVole', compact('voles'));
    }
}
