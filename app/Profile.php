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
*This function requires the user_id in question to retrieve the profile from other views
*/
public static function UserProfile($id){

return User::find($id)->profile->country;	
	
}


}
