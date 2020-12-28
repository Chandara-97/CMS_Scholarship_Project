<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class article extends Model
{


    protected $guarded=[];


//    public function withLikes(Builder $query){
//        $query->leftJoinSub(
//            'select article_id,sum(liked) likes,sum(!liked) dislikes from likes group by article_id',
//            'likes',
//            'likes.article_id',
//            'articles.id'
//        );
//    }

    public function likes(){
        return $this->hasMany(likes::class);
    }

    public function like($user=null,$like=true){
        $this->likes()->updateOrCreate([
            'user_id'=>$user ? $user->id:auth()->id(),
        ], [
            'liked'=>$like
        ]);
    }
    public function isLikedBy($id){
        $user=User::find($id);
        return (bool)$this->likes()->where("user_id",$user->id)->where("liked",true)->exists();
    }

    public function dislike($user=null){
        $this->like($user,false);
    }
    public function isDislikedBy($id){
        $user=User::find($id);
        return (bool)$this->likes()->where("user_id",$user->id)->where("liked",false)->exists();
    }

}
