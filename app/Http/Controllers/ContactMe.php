<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactMe extends Controller
{
    public function contact() {
        return view('contact');
    }
    public function contactSend() {
        $data = request(['name','email','message']);
        
        Mail::to('andikagusti129@gmail.com')->send(new Contact($data));

        return redirect('/contact')->with('flash','Message Sended Seccusfully');
    }
}
