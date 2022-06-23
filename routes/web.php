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