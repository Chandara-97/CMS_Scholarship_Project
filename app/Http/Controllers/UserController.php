<?php

namespace App\Http\Controllers;

use App\article;
use App\comment;
use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function index(){
        $users=User::latest()->get();

        return view("admin.user",compact("users"));
    }

    public function create(){
        return view("admin.user.create");

    }

    public function store(){
        \request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dob'=>"required",
        ]);


        $user=new User();
        $user->name=\request("name");
        $user->email=\request("email");
        $user->dob=\request("dob");

        if (\request()->hasFile("image")){
            \request("image")->store("image");
            $user->image=\request("image")->hashname();
        }
        $user->role=\request("role");
        $user->password=bcrypt(\request("password"));
        $user->save();


        return redirect("/admin/user");
    }

    public function update($id){
        \request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dob'=>'required',
        ]);
        $user=User::find($id);
        $user->name=\request("name");
        $user->email=\request("email");
        $user->role=\request("role");
        $user->dob=\request("dob");
        if (\request()->hasFile("image")){
            \request("image")->store("image");
            $user->image=\request("image")->hashname();
        }
        $user->password=bcrypt(\request("password"));
        $user->save();

        return redirect("/admin/user");
    }

    public function role($role,$id){
        $user=User::find($id);
        $user->role=$role;
        $user->save();

        return redirect("/admin/user");
    }


    public function destroy($id){
        $user=User::find($id)->delete();

        return redirect("/admin/user");
    }

    public function edit($id){
        $user=User::find($id);
        return view("admin.user.edit",compact("user"));
    }

    public function profile($id){
        $user=User::find($id);
        $post=article::where("author",$user->name)->count();
        $comment=comment::where("comment_author",$user->id)->count();
        $email=Contact::where("user_email",$user->id)->count();
        return view("profile.profile",compact("user","post","comment","email"));
    }

}
