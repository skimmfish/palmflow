<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletModel extends Model
{
    //
	protected $fillable = ['user_id','wallet_id','wallet_identifier','use_for_withdrawl'];
	protected $guarded = ['wallet_id'];
	protected $dates = ['created_at','deleted_at','updated_at'];
}
