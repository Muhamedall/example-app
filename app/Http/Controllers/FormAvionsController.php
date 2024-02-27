<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avions;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use  Illuminate\Support\Facades\DB;
class FormAvionsController extends Controller
/*@param  \Illuminate\Http\Request  $request
@return \Illuminate\Http\Response
*/
{
  
    public function create(Request $request){
      //  $libely = $request->input('libely');
        //$capacity =$request->input('capacity');
        //Avions::create(["libelle"=>$libely,"capacite"=>$capacity]);
        Avions::create($request->all());
        return Redirect("/avions");
       
    }
    public function delete($id)
    {
        $avion = Avions::findOrFail($id);
        $avion->delete();

        return redirect()->back()->with('success', 'Avion deleted successfully');
    }
   

}
