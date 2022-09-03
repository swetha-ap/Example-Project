<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\clients;        //importing MODEL Client to this Controller


class eorm extends Controller
{
                       //INSERT DATA EORM
    function data_insert(Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $email=$request->email;
        $pswd=$request->pswd;
        $client_obj=new clients(['firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'password'=>$pswd]); //Passing form values into DB Table
        $client_obj->save();   
    }

                         //GET DATA EORM
    function data_retrieve(){
        $data=clients::get();  //clients is the model name
        return view('laravel_crud/orm_reg',['data'=>$data]);
    }

                        //DELETE DATA EORM
    function delete_data($id){
       clients::find($id)->delete(); //to find id from table
        // echo $find_id;
        return redirect('orm_reg');
    }

                      //GET NON-UPDATED DATA EORM
    function nonupdated_data($id){
        $get_nonupdated_data= clients::find($id);
        // print_r($get_nonupdated_data);
        return view('laravel_crud/update_orm',['non_updated_data'=>$get_nonupdated_data]);
    }

                       //UPDATE DATA EORM
    function update_data(Request $request,$id){
        $fname=$request->fname;
        $lname=$request->lname;
        $email=$request->email;
        $pswd=$request->pswd;
        clients::find($id)->update(['firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'password'=>$pswd]); //updating data acc to id
        return redirect('ormreg');
    }
}
