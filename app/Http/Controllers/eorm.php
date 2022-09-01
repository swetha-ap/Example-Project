<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\clients;        //importing MODEL Client to this Controller


class eorm extends Controller
{
    function data_insert(Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $email=$request->email;
        $pswd=$request->pswd;
        $client_obj=new clients(['firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'password'=>$pswd]); //Passing form values into DB Table
        $client_obj->save();   
    }
}
