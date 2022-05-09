<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Profile extends Model
{
	
	use SoftDeletes;

    //
	protected $fillable = [	'first_name','last_name','telephone','profile_img','linkedin_url','facebook_url','twitter_url', 'instagram_url'];
	
	protected $guarded = [];
	
	 protected $dates = ['deleted_at'];
	 
	 protected $hidden = [];
	 

public function User(){
	
	return $this->belongsTo('App\User');
	
}

/*
*This function requires the user_id in question to retrieve the profile model primary key in order to retrieve other fields
*/
public static function UserProfile($id){

return User::find($id)->id;	
	////$profile = Profile::find(1)->user->username
}

//this function returns an object array containing the user's profile
public static function myProfile($users_id){
	
	return Profile::where('user_id',$users_id)->get();
	
}

public static function getprofileuser($profile_id){
	
	$profile = new Profile;
	return $userModelId = $profile->find($profile_id)->user_id;
	
}



/*
*@param $user_id obtained through the profile's model
@return - field_to_return
*/

public static function get_profile_data($user_id,$field_to_return){
    $res = null;
    $req = Profile::where('user_id',$user_id)->get();
    //traversing through the resultset
    foreach($req as $t){
    $res = $t[$field_to_return];
    }

return $res;
}


}
