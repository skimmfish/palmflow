<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use lluminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;

use App\Profile;

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

public static function get_deleted_user($id,$field_to_return){
$body = User::withTrashed()->where('id',$id)->get();
$res = null;
foreach($body as $x){
$res = $x[$field_to_return];
}
return $res;
}

}
