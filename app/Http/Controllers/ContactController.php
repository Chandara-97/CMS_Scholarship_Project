<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::with("user")->get();
        return view("admin.contact",compact("contacts"));
    }


    public function show(){
        return view("contact");
    }

    public function status($status,$id){
        $contact=Contact::find($id);
        $contact->replied_back=$status;
        $contact->save();

        return redirect("/admin/contact");

    }

    public function destroy($id){
        $contact=Contact::find($id)->delete();

        return redirect("/admin/contact");
    }

    public function store(Request $request){
        $request->validate([
            "subject"=>"required",
            "content"=>"required"
        ]);

        $contact=new Contact();
        $contact->user_email=auth()->user()->id;
        $contact->subject=$request->subject;
        $contact->content=\request("content");

        $contact->save();
        return redirect("/contact")->with("success","You message have been sent. We will consider your idea and contact you back soon. Thank you for your idea.");
    }
}
