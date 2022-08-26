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

          //  INSERT DATA INTO DB TABLE
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

                //  SHOW DATA FROM DB TO WEBPAGE
    function show_data(){
       $get_data = DB::table('registration')->get();
       return view('laravel_crud/show_reg',['retrieve_data'=>$get_data]);
    }

               //DELETE FN 
    function delete_data($id){
      DB::table('registration')->where('id',$id)->delete();
      return redirect('show');
    }

               //UPDATE FN
    function nonupdated_data($id){
       $get_nonupdated_data = DB::table('registration')->where('id',$id)->first();
       return view('laravel_crud/update_reg',['non_updated_data'=>$get_nonupdated_data]);
    }

    function update_data(Request $request , $id){
      $fname=$request->fname;
      $lname=$request->lname;
      $email=$request->email;
      $pswd=$request->pswd;
      DB::table('registration')->where('id',$id)->update([
        'firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'password'=>$pswd
      ]); 
      return redirect('show');
    }
}
