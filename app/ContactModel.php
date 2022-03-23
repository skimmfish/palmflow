<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    //
	protected $fillable = ['first_name','last_name','phone_number','user__email','message','issues_category','ticket_number'];
	protected $dates = ['created_at','updated_at'];
}
