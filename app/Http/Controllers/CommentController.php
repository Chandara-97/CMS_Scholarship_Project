<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments=comment::with("user","post")->get();
//        $comments=admin::latest()->get();
        return view("admin.comment",compact("comments"));
    }
    public function destroy($id){
        $comment=comment::find($id);
        $comment->delete();

        return redirect("/admin/admin");
    }
}
