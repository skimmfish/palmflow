<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoAPIManager extends Model
{
    //
	protected $guarded = [];
	protected $fillable = [];
	protected $dates = ['created_at','deleted_at','updated_at'];

}
