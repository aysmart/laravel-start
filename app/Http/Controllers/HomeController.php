<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->get('page')){
            return $request-get('page');
        }
    }

    public function contact(Request $request){
      //  if($request->get('page')){
      //      return $request-get('page');
     //   }

     if($request->get('page')){
        return $request-get('page');
     }

     return view("about-us");

    }

    public function getParamsindex($id){
        return view('homeParamsView', ['id' => $id]);
    }
}


?>
