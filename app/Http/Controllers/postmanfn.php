<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class postmanfn extends Controller
{
    //insert data using api
    function insert(Request $request){
        $name=$request->name;
        $email=$request->email;
        $pswd=$request->pswd;

        $object= new customer([
            'name'=>$name,
            'email'=>$email,
            'password'=>$pswd
        ]);
        $object->save();

        return response(['status_code'=>'200']);
    }

    //get data from db to api
    function fetch(){
        $get_data=customer::get();
        return response(['fetch_data'=>$get_data]);  //passing and gettin values in json format key value pair
    }

    //delete data from db using api
    function delete(Request $request,$id){
        customer::find($id)->delete();
    }

    //update data in db
    function update(Request $request, $id){
        $name=$request->name;
        $email=$request->email;
        $pswd=$request->pswd;
        customer::find($id)->update([
            'name' =>$name,
            'email'=>$email,
            'password'=>$pswd
        ]);
    }
      
     //get a single value from db using ID
    function single(Request $request,$id){
       $data= customer::find($id);
       return response(['single_data'=>$data]);
    }

      //search and show a particular name in db 
    function search_name(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        // print_r($name);
        $result=customer::where('name','like','%'.$name.'%')->orwhere('email',$email)->get();
        // $result=customer::where('name','like','%'.$name.'%')->where('email',$email)->get(); //to get a particular name and email as AND

        return response(['res'=>$result]);
    }
}
