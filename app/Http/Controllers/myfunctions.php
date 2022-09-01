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

                            // LOGIN
    function login(Request $request){
      $entered_email=$request->email;
      $entered_pswd=$request->password;
      $stored_email=DB::table('registration')->where('email',$entered_email)->first();
      // return view('laravel_crud/login',['email'=>$stored_email]);
      if(is_null($stored_email)){    //to check if value in the variable is empty ie input email not in db
       $error="NO EMAIL DATA";
       return view('laravel_crud/login',['error'=>$error]);
      }
      elseif($entered_email==$stored_email->email && $entered_pswd==$stored_email->password){ //check if login successful
        $request->session()->put('session_started',$stored_email->id); //creating a session using id with a session name  
        return redirect('show');
      }
      else{
        $error="LOGIN UNSUCCESSFUL";
        return view('laravel_crud/login',['error'=>$error]);
      }
    }

                  //LOGOUT
    function logout(){
      session()->forget('session_started');
      // session()->flush();    //this will delete all session broswer history typically used while deactivating
      return redirect('login');
    }

        //PROFILE AFTER LOGIN 
    function profile(Request $request){
      if(session()->has('session_started')){
      $profile=$request->session()->get('session_started'); //to fetch session id of that particular user
      $profile_details=DB::table('registration')->where('id',$profile)->first(); //fetch row from db of that profile id which matches with session id
      return view('laravel_crud/profile',['profile'=>$profile_details]);
      }
      else{
        echo "no session";
      }
    }

    
             //FILE UPLOAD FN
    function file_upload(Request $request){
      $name=$request->name;
      $email=$request->email;
      $upload_img="img".time().".".$request->upload->getClientOriginalExtension();//time() used to generate diff timespan for each img upload to make images unique
      // echo $upload_img;
      $request->upload->storeAs("public/laravelimages",$upload_img); //img uploaded from input box is stored in a new folder under PUBLIC
      DB::table('fileupload')->insert(['name'=>$name ,'email'=>$email,'upload'=>$upload_img]);
      // return view('laravel_crud/fileupload',['msg'=>"successfully inserted"]);
      return redirect('showfile');
  
    }

    function show_file(){
      $get_data = DB::table('fileupload')->get();
      return view('laravel_crud/showfile',['retrieve_data'=>$get_data]);
    }
}

                         
  