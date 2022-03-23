<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotificationModel extends Model
{
use SoftDeletes;

protected $fillable = ['pub_status','read_status','note','subject','notification_type','sender_id','receiver_id'];

protected $dates = ['deleted_at'];


}
