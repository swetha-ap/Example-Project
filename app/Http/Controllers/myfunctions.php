<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myfunctions extends Controller
{
    function addition(Request $request){  //variable 'request' contains all data when add button is clicked
      $first_no=$request->no1;
      $second_no=$request->no2;
      $result=$first_no+$second_no;
      return view('laravel_crud/sum',["sum"=>$result]); //return sum value in key:value format array to path of blade page in view 
    }
}
