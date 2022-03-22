<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //

protected $fillable = [
'post_body','post_title','intro','header_bg','body_img','author'
];


protected $hidden = [];


}
