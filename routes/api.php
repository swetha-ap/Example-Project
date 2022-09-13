<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postmanfn;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//API ROUTES
route::post('api_insert',[postmanfn::class,'insert']);
route::get('api_fetch',[postmanfn::class,'fetch']);
route::delete('api_delete/{Id}',[postmanfn::class,'delete']);
route::put('api_update/{Id}',[postmanfn::class,'update']);
route::get('api_single/{Id}',[postmanfn::class,'single']); //get single data acc to id
route::get('api_searchname',[postmanfn::class,'search_name']);