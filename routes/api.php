<?php

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/profile/{id}', function($id){
	
	$aUsers = DB::table('users')->where('id',$id)->get();
	
	return $aUsers->toJson();
	
});


//fetching all the users in the system who are active with an active and verified email address
Route::get('alluser', 'UserController@index');

Route::namespace('Api')->group(function(){
Route::apiResource('my-users','UserController');
});
//for creating new user
Route::post('new-user', 'UserController@store');

//return User::create($request->all());
//{"email":"shola.fosud@gmail.com","username":"igwe.king","active":"0","is_admin":"1","updated_at":"2022-05-08T18:04:57.000000Z","created_at":"2022-05-08T18:04:57.000000Z","id":29}


//for login out the user
Route::get('logout','UserController@logout');