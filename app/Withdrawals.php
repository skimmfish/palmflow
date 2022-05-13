<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Withdrawals extends Model
{
    use SoftDeletes;

    protected $fillable = ['amount','user_id','transaction_id','receiving_wallet_id','status','confirmations'];
    protected $date = ['updated_at','created_at','deleted_at'];
    protected $guarded = [];
    protected $hidden = [];
    //

    
public function user(){

//$user = User::find(1)->profile->telephone; this line retrieves the users' phone number via the profile model if the telephone number is within the Profile scope

return $this->hasOne('\App\User');
}

}
