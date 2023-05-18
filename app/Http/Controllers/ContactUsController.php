<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactusPost(Request $request){

        $this->validate($request,
                ['email'=>'required|unique:email',
                'name'=>'required'
                ]
        );

        $contactus = new ContactUs();
        $contactus->name = $request -> input('name');
        $contactus->email = $request -> input('email');
        $contactus->subject = $request -> input('subject');
        $contactus->message = $request -> input('message');
        $contactus->save();

        return back()->with('status','The category name has been successfully saved!!!');
    }
}
