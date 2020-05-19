<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contact'); 

    }

    public function store()
    {
    	Contact::create($this->validateContactData());

    	// Mail::send('emails.contact-message', [
    	// 	'msg' => $request->message
    	// ], function ($mail) use($request){
    	// 	$mail->from($request->email, $request->name);
    	// 	$mail->to('muhanuzistewart@gmail.com')->subject('Contact Message');
    	// });

    	return redirect('/contact')->with('flash_mesaage', 'Thank You for your message.');

    }

    public function validateContactData()
    {
        return request()->validate([
            'name' =>'required',
            'email'=> 'required|email',
            'subject'=> 'required',
            'message' =>'required'
        ]);
    }
}

