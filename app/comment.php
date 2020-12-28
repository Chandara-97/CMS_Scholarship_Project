<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class,'comment_author');
    }

    public function post(){
        return $this->belongsTo(article::class,"comment_post_id");
    }
}
