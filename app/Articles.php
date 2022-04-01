<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Articles extends Model
{
    //
use SoftDeletes;

protected $fillable = [
'post_body','post_title','intro','header_bg','body_img','author'
];


protected $hidden = [];


}
