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