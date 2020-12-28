<?php

namespace App\Http\Controllers;

use App\article;
use App\likes;
use Illuminate\Http\Request;

class ArticleLikeController extends Controller
{
    public function store($id){
        $article=article::find($id);
            $article->like(auth()->user());
            return back();
    }
    public function destroy($id){
        $article=article::find($id);
        $article->dislike(auth()->user());
        return back();
    }
}
