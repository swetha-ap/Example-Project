<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;

class ajaxfn extends Controller
{
    function ajax_data_insert(Request $request){
       $name=$request->get_name;
       $email=$request->get_email;
       $pswd=$request->get_pswd;
       DB::table('ajaxreg')->insert([
        'name'=>$name,'email'=>$email,'password'=>$pswd
      ]); 
    }

    //to check wtr a name is available in db
    function check_name(Request $request){
        $check_name=$request->name;
        $retrieve_data=DB::table('ajaxreg')->where('name',$check_name)->first(); //retrieving row if name is present in db
        if(is_null($retrieve_data)){
            return Response::json(array('success'=>true,'msg'=>'name available'));
        }
        else{
            return Response::json(array('success'=>true,'msg'=>'name already present'));
        }
    }
}
