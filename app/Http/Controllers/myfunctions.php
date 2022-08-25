<?php

namespace App\Http\Controllers;
use DB;                         //to start db in the page        
use Illuminate\Http\Request;

class myfunctions extends Controller
{
    function addition(Request $request){  //variable 'request' contains all data when add button is clicked
      $first_no=$request->no1;
      $second_no=$request->no2;
      $result=$first_no+$second_no;
      return view('laravel_crud/sum',["sum"=>$result]); //return sum value in key:value format array to path of blade page in view 
    }

    function register(Request $request){
      $fname=$request->fname;
      $lname=$request->lname;
      $email=$request->email;
      $pswd=$request->pswd;
      DB::table('registration')->insert([
        'firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'password'=>$pswd
      ]); 
      return view('laravel_crud/reg_form');
    }
}
