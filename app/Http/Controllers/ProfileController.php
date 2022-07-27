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



    /*
    *@param Illuminate\Request <$request>
    *@param String <$formFieldHandler>
    *@param String <$location>
    *@return String <$fileName>
    *This file picks the selected file and upload it to the directory specified with the $location variable
    */
    public function saveFile(Request $request,$formFieldHandler,$location){
        
        $fileName = NULL;
        //validating if a file is uploaded
        if($request->file($formFieldHandler)->isValid()){
        $fileName = time().'.'.$request->$formFieldHandler->guessExtension();
        //$request->$formFieldHandler->move(public_path($location), $fileName);   
        
        $request->$formFieldHandler->move(public_path($location),$fileName);   
    
    }else{
        flash('No file was uploaded')->fail();
        return redirect()->back()->with('message','No file was uploaded, kindly check and try again');
    }

    return $fileName;
 }
        
 /*
 *@param Integer <$id>
 * @param \Illuminate\Request
 */

    public function uploadAvatar(Request $request, $id){
    
    $profile = \App\Profile::where('user_id',$id);
    $profile_img = $this->saveFile($request,'my_avatar','img/160x160');

    //$fileName = time().'.'.$request->my_avatar->extension();
    //$request->$formFieldHandler->move(public_path($location), $fileName);
        
    //$profile->profile_img = $fileName;

    //$profile->save();
    
    $response = DB::update("UPDATE profiles SET profile_img=? WHERE user_id=?",[$profile_img,$id]);
    $msg= "Avatar uploaded and modified successfully";

    $msg= "Avatar uploaded and modified successfully";
    flash($msg)->success();
    return redirect()->route('admin.dashboard.user')->with(['message'=>$msg]);
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
     * @param int $user_id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id,$user_id)
    {
        //this line checks if the user already exists in the profile table
       $userExists = \App\Profile::get_profile_data($id,'id');
        
        if(!$userExists){
            //insert a row into the profile table first and then proceed with updating the user
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $city = $request->city;
            $country = $request->country;
            $state = $request->state;
            $telephone = $request->telephone;
            $linkedin_url = $request->linkedin_url;
            $twitter_url  = $request->twitter_url;
            $facebook_url = $request->facebook_url;	
            $address = $request->address;
            $telephone=$request->telephone;
            $today = date('Y-m-d h:i:s', time());

        $response = DB::insert("INSERT into profiles (user_id,first_name,last_name,address,city,state,profile_img,linkedin_url,facebook_url,twitter_url,country,
        telephone,
        created_at,
        updated_at) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
        [$user_id,$first_name,$last_name,$address,$city,$state,'',$linkedin_url,$facebook_url,$twitter_url,$country,$telephone,$today,$today]);
        }else{

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
                $profile->address = $request->address;
                $profile->telephone = $request->telephone;
                //saving to profile table
                $profile->save($request->all());
        }

        flash("User profile updated successfully")->success();
			return redirect()->route('admin.dashboard.user')->with('message','User profile updated successfully');
}

/*
*@param $id for user_id
*@return void
*/
public function update_avatar($id){
$profile = Profile::find($id);



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
