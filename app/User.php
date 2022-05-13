<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use lluminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;

use App\Profile;
use App\Withdrawals;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
	use SoftDeletes;
	use CanResetPassword;
	
	
	/*protected static function boot(){
		
		parent::boot();
		static::addGlobalScope('active', function(Builder $builder){$builder->where('active',true);}
		);
		
	}*/
	
    protected $table = 'users';
    /*
    *isAdmin returns if a user is a super admin
    */
    public function isAdmin(){
        return $this->role = 'admin';
    }

    public function isUser(){
        return $this->role ='user';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password','username','is_admin','active' ];
	protected $casts =[	'email_verified_at'
	];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','api_token'];

	protected $dates = ['deleted_at'];
	



public function profile(){
	
	//$user = User::find(1)->profile->telephone; this line retrieves the users' phone number via the profile model if the telephone number is within the Profile scope
	
	return $this->hasOne('Profile');
}

/*
@param null
*@return Withdrawal relationship hook
*entity relationship linkages
*/

public function withdrawals(){

    //$user = User::find(1)->profile->telephone; this line retrieves the users' phone number via the profile model if the telephone number is within the Profile scope
    
    return $this->hasMany('\App\Withdrawals');
    }

    
/*
*@param $id - user_id and the name of the column to return through the return statement
*/
public static function get_deleted_user($id,$field_to_return){
$body = User::withTrashed()->where('id',$id)->get();
$res = null;
foreach($body as $x){
$res = $x[$field_to_return];
}
return $res;
}

/*
*@param $user_id obtained through the profile's model
@return - field_to_return
*Only fields obtainable from the User's model can be retrieved from here
*/

public static function get_profile_data($user_id,$field_to_return){
    $res = null;
    $req = User::where('id',$user_id)->get();
    //traversing through the resultset
    foreach($req as $t){
    $res = $t[$field_to_return];
    }

return $res;
}

public function Transactions(){
return $this->hasMany('\App\Transactions');
}

}
