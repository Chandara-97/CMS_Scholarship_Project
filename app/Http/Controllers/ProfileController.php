<?php

namespace App\Http\Controllers;

use App\article;
use App\comment;
use App\Contact;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        $user=User::find(auth()->user()->id);
        $comment=comment::where("comment_author",$user->id)->count();
        $email=Contact::where("user_email",$user->id)->count();
        return view("profile.show",compact("user","comment","email"));
    }

    public function update($id){
        \request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user=User::find($id);
        $user->name=\request("name");
        $user->email=\request("email");
        $user->role=\request("role");
        if (\request()->hasFile("image")){
            \request("image")->store("image");
            $user->image=\request("image")->hashname();
        }
        $user->password=bcrypt(\request("password"));
        $user->save();

        return redirect("/profile");
    }

    public function edit(){
        $user=User::find(auth()->user()->id);
        return view("profile.edit",compact("user"));

    }
}
