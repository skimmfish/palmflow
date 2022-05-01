<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return User::paginate(20);
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
//
$user = new User;
echo $user->email = $request->input(email_address);
$user->password = bcrypt($request->input('password'));
$user->username = $request->input('username');
$user->active = 0;
$user->is_admin = 1;
$user->provider_handle = $request->input('provider_handle');
$user->handle_google = $request->input('handle_google');
$user->phone_number = $request->input('phone_number');
$user->api_token = $request->input('api_token');

//$filledIn = $request->input();echo toString($filledIn);

$user->save();

return response()->json(['message'=>"User's profile saved successfully"],200);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
		
		$user->save($request->all());
		flash("User profile updated successfully")->success();
		
		return redirect()->route('admin.dashboard.user')->with('message','User profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  //      $user = User::find($id);
	//	$user->delete();
		
		DB::table('users')->where('id',$id)->delete();
		
		return redirect()->route('dashboard/allusers');
    }
}
