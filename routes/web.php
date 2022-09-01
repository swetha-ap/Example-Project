<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('a/', function () {
//     return view('welcome');
// });
//view cmd to view just the page
route::view('/','welcome');
// we are setting a name reference for the blade file when using link
route::view('a','eg1')->name('link1');
route::view('index','displayprop')->name('link2');
route::view('eg3','eg3')->name('link3');
route::view('s','styles');
route::view('p' , 'position');
route::view('g' , 'grid');
route::view('eg' , 'grideg');
route::view('b' , 'bootstrap');
route::view('t' , 'bstable');
route::view('f' , 'bsforms');
route::view('j1' , 'jseg1');
route::view('j2' , 'jseg2');
route::view('j3' , 'alertpromptconfirm');
route::view('j4' , 'condition');
route::view('j5' , 'conditional2');
route::view('j6' , 'loop');
route::view('j7' , 'loopeg');
route::view('j8' , 'dowhileandnestedfor');
route::view('j9' , 'functions');
route::view('j10' , 'dom');
route::view('j11' , 'dom2');
route::view('j12' , 'calculator');
route::view('j13' , 'todo');
route::view('j14' , 'checkpassword');
route::view('j15' , 'fruitslist');
route::view('j16' , 'jscalculator');
route::view('j17' , 'formvalidation');
route::view('j18' , 'jsstringmethods');
route::view('j19' , 'egstringmethod');
route::view('j20' , 'jsarraymethods');
route::view('j21' , 'jqueryegs');
route::view('j22' , 'callbackfn');
route::view('cartoon' , 'cartoon');
route::view('j23' , 'jqueryhtml');
route::view('j24' , 'jqueryfn');
route::view('j25' , 'jqtraverse');
route::view('j26' , 'jqvalidation');
route::view('j27' , 'jqueryslider');

// LARAVEL CRUD
route::view('sum','laravel_crud/sum');
route::post('sum',[App\Http\Controllers\myfunctions::class,'addition']);
route::view('register','laravel_crud/reg_form');
route::post('register',[App\Http\Controllers\myfunctions::class,'register']);
// route::view('show','laravel_crud/show_reg');
route::get('show',[App\Http\Controllers\myfunctions::class,'show_data']);
route::get('delete/{Id}',[App\Http\Controllers\myfunctions::class,'delete_data']);
route::get('update/{Id}',[App\Http\Controllers\myfunctions::class,'nonupdated_data']);
route::post('updatedata/{Id}',[App\Http\Controllers\myfunctions::class,'update_data']);
route::view('login','laravel_crud/login');
route::post('login',[App\Http\Controllers\myfunctions::class,'login']);
route::get('logout',[App\Http\Controllers\myfunctions::class,'logout']);
route::get('profile',[App\Http\Controllers\myfunctions::class,'profile']);
route::view('upload','laravel_crud/fileupload');
route::post('upload',[App\Http\Controllers\myfunctions::class,'file_upload']);
route::view('showfile','laravel_crud/showfile');
route::get('showfile',[App\Http\Controllers\myfunctions::class,'show_file']);

//e orm
route::view('ormreg','laravel_crud/orm_reg');
route::post('ormreg',[App\Http\Controllers\eorm::class,'data_insert']);