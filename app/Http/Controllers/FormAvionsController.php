<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avions;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class FormAvionsController extends Controller
/*@param  \Illuminate\Http\Request  $request
@return \Illuminate\Http\Response
*/
{
    public function index(Request $request){
        $libely = $request->input('libely');
        $capacity =$request->input('capacity');
        
        return view("FormAvions");
    }
    public function create(Request $request){
      //  $libely = $request->input('libely');
        //$capacity =$request->input('capacity');
        //Avions::create(["libelle"=>$libely,"capacite"=>$capacity]);
        Avions::create($request->all());
        return Redirect("/avions");
       
        
    }
}
