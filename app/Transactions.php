<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
	use SoftDeletes;
	
    //
	protected $fillable = [];
	protected $hidden = [];
	protected $guarded = [];
	protected $dates = ['created_at','updated_at','deleted_at'];

public function Users(){
	
	return $this->hasOne('App\Users');
	
}


}
