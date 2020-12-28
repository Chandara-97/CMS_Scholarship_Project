<?php

namespace App\Http\Controllers;

use App\article;
use App\comment;
use App\likes;
use App\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        // dd(1);
        $posts=article::all()->count();
        $users=User::all()->count();
        $admin=User::where("role","admin")->count();
        $editor=User::where("role","editor")->count();
        $sub=User::where("role","subscriber")->count();

        $draft_post=article::where("status","draft")->count();
        // dd($sub);
        $public_post=article::where("status","published")->count();

        $comments=comment::latest()->count();
      
        $like=likes::where("liked",true)->count();
        // dd(auth()->user());
        return view("admin.dashboard",compact("posts","draft_post","public_post","users","admin","editor","sub","comments","like"));
    }
}
