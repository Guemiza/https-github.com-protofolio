<?php

namespace App\Http\Controllers;

use App\Example;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function methode (){
       $Name=Example::all();
      
        return view ('example',compact('Name',$Name)); 


    }
}
