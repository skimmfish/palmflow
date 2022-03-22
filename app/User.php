<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Profile;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password','username','is_admin','active' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','api_token'];

public function profile(){
	
	//$user = User::find(1)->profile->telephone; this line retrieves the users' phone number via the profile model if the telephone number is within the Profile scope
	
	return $this->hasOne('Profile');
}

}
