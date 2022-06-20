<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GasFee extends Model
{
    //implementing Soft deletion of record by users
    use SoftDeletes;

    protected $fillable = ['amount','user_id','txn_id','staked_value'];
    protected $cast = ['deleted_at','creted_at','updated_at'];
    protected $dates = [];



    //creating a relationship between the gas fees table and user's table
    public function User(){
        return $this->belongsTo('\App\User');
    }
}
