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
//		return User::paginate(20);
return $users = User::paginate(20); return $users->toJson();
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

$user = new User;
$user->email = $request->email;
$user->password = bcrypt($request->input('password'));
$user->username = $request->input('username');
$user->active = 0;
$user->is_admin = 1;
$user->provider_handle = $request->input('provider_handle');
$user->handle_google = $request->input('handle_google');
$user->phone_number = $request->input('phone_number');
$user->api_token = $request->input('api_token');

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
     * Remove the specified resource from being active by setting the deleted_at column to the current datetime.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
DB::table('users')->where('id',$id)->update(["deleted_at"=>NULL]);
return redirect()->route('admin.dashboard.core-admin.allusers',['type'=>'all']);
}


/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function forcedelete($id){

$user = User::onlyTrashed()->where('id',$id)->forceDelete();
$msg = "User profile completely deleted successfully";

//flashing session storage
flash($msg)->success($msg);

return redirect()->route('admin.dashboard.core-admin.allusers',['type'=>'all'])->with('message',$msg);
}


/*logout() function for the /api/auth/logout endpoing
*@param Request object
*@return Response
*/
public function logout(Request $request)
{
    $user = Auth::guard('api')->user();

    if ($user) {
        $user->api_token = null;
        $user->save();
    }

    return response()->json(['data' => 'User logged out.'], 200);
}

}
