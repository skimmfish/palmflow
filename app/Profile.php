<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
	protected $fillable = [	'first_name','last_name','telephone','profile_img','linkedin_url','facebook_url','twitter_url', 'instagram_url'];
	
	protected $guarded = [];


public function User(){
	
	return $this->belongsTo('App\User');
	
}

}
