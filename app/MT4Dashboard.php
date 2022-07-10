<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MT4Dashboard extends Model
{

    use SoftDeletes;

    protected $fillable = ['account_name','account_number','broker_name','mt4_server'];
    protected $cast = ['updated_at','created_at'];
    protected $dates = ['deleted_at']; 

    public function User(){
        return $this->belongsTo('\App\User');
    }
}
