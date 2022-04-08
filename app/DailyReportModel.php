<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReportModel extends Model
{

use SoftDeletes;

protected $fillable = [

'fx_roi','futures_roi','stakers_split','directors_split','charity_split','highest_daily_dd','overnight_dd','total_daily_roi'

];

protected $guarded = [];

protected $dates = [
'created_at','updated_at','deleted_at'
];


}
