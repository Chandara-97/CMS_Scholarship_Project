<?php

namespace App\Http\Controllers;

use App\article;
use App\comment;
use App\like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Fqsen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function index(){
        $articles=article::latest()->get();
        return view("admin.article",compact("articles"));
    }

    public function show(){
        $articles=article::where("status","published")->latest()->get();
        return view("article.allcontent",compact("articles"));
    }

    public function post($id){
        $article=article::find($id);

        $like=$article->likes()->where("liked",true)->count();

        $article->view+=1;
        $article->save();
        $data=Comment::with('user')->where("comment_post_id",$id)->get();
        $article=article::find($id);
        $comment_count=comment::where("comment_post_id",$id)->count();
//        $comments= admin::where("comment_post_id",$id)->get();
        return view("article.post",compact("article",'data',"comment_count","like"));
    }

    public function like($id){
        $user=Auth::user()->id;
        $like_user=like::where([
            ["user_id",$user],
            ["post_id",$id]
        ])->first();
        if(empty($like_user->user_id)){
            $user_id=Auth::user()->id;
            $post_id=$id;
            $like=new Like();
            $like->user_id=$user_id;
            $like->post_id=$post_id;
            $like->save();

            return redirect("/post/{$id}/");
        }
        else{
            return redirect("/post/{$id}/");
        }
    }

    public function create(){
        return view("create");
    }

    public function destroy($id){
        $article=article::find($id)->delete();
        return redirect("/admin/article");
    }

    public function edit($id){
        $article=article::find($id);
        return view("article.edit",[
            "article"=>$article
        ]);
    }

    public function update($id){
        \request()->validate([
            "title"=>"required",
            "author"=>"required",
            "content"=>"required"
        ]);

        $article=article::find($id);

        $article->title=\request("title");
        $article->author=\auth()->user()->name;
        $article->content=\request("content");
        \request("image")->store("image");
        $article->image=\request("image")->hashname();
        $article->category=\request("category");
        $article->status=\request("status");
        $article->save();
        return redirect("/admin/article");
    }
    public function status($status,$id){
        $article=article::find($id);
        $article->status=$status;
        $article->save();
        return redirect("/admin/article");

    }

    public function search(){
        $articles=article::where([["status","published"],["title","like","%".\request("search")."%"]])->get();
        return view("article.allcontent",compact("articles"));
    }

    public function store(){
        \request()->validate([
            "title"=>"required",
            "image"=>"required",
            "content"=>"required"
        ]);
        $article=new article();
        $article->title=\request("title");
        $article->author=auth()->user()->name;
        $article->category=\request("category");
        $article->status=\request("status");
        \request("image")->store("image");
        $article->image=\request("image")->hashname();
        $article->content=\request("content");
        $article->save();

        return redirect("/admin/article");
    }

    public function comment($id){
        \request()->validate([
            "comment"=>"required"
        ]);

        $comment=new comment();
        $comment->comment_post_id=$id;
        $comment->comment_author=auth()->id();
        $comment->comment_content=\request("comment");

        $comment->save();

        return redirect("/post/{$id}");
    }

    public function show_cat($cat){
        $articles=article::where([["category","=",$cat],["status","published"]])->latest()->get();
        return view("article.allcontent",compact("articles"));
    }
}
