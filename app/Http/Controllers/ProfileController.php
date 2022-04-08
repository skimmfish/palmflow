<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
   	   $profile = $user->user();
	   return view('profile')->withUser($user)->withProfile($profile);

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
    }

    /**
     * Display the specified resource.
     *
     * instead of @param  int  $id, we use the User model class instance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	
		$profile = DB::table('profiles')->where('id',$id)->get();
		
		return view('admin.dashboard.core-admin.viewuser')->with(['title'=>'View User','profile'=>$profile]);

	 
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
			$profile = \App\Profile::find($id);
				
				$profile->first_name = $request->first_name;
				$profile->last_name = $request->last_name;
				$profile->city = $request->city;
				$profile->country = $request->country;
				$profile->state = $request->state;
				$profile->telephone = $request->telephone;
				$profile->linkedin_url = $request->linkedin_url;
				$profile->twitter_url  = $request->twitter_url;
				$profile->facebook_url = $request->facebook_url;
			
				$profile->save($request->all());
			
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
                DB::table('profiles')->where('id',$id)->delete();
		
		return redirect()->route('admin.dashboard.core-admin.allusers')->with('message','User archived successfully');

    }
}
