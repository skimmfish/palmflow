<?php

use Illuminate\Http\Request;
use App\User;


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
	
})->middleware('auth:api');


//fetching all the users in the system who are active with an active and verified email address
Route::get('allusers', function(){
	
$users = User::paginate(20); return $users->toJson();

//return DB::select("SELECT *FROM users WHERE active=?",[1]);

//	return User::where("active",1)->first();
	
});

Route::namespace('Api')->group(function(){
	
	Route::apiResource('my-users','/UserController');

});
//for creating new user
Route::post('new-user', 'UserController@store');