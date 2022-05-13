<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoAPIManager extends Model
{
    //
	protected $guarded = [];
	protected $fillable = [];
	protected $dates = ['created_at','deleted_at','updated_at'];


public function __construct(){

}

	/*
	*@param column whose value to get
	*@return String 
	*/
public static function	get_value($column_to_fetch){
$response = CryptoAPIManager::where(['key_option'=>$column_to_fetch, 'autoload'=>1])->get();
return $response[0]['key_value'];
}


}
