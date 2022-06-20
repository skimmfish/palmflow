<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MT4Dashboard extends Model
{
    protected $fillable = ['account_name','account_number','broker_name','mt4_server'];
    protected $cast = ['deleted_at','updated_at','created_at'];

    public function User(){
        return $this->belongsTo('\App\User');
    }
}
