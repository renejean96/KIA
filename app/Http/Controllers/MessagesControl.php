<?php

namespace App\Http\Controllers;

use App\Messages;


use Illuminate\Http\Request;


class MessagesControl extends Controller
{
    public function index(){
        $messages = Messages::orderBy('created_at','desc')->paginate(3);
        return view('dashboard.view_message')->with('messages',$messages);
    }

    public function save(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $message = new Messages;
        $message->name = $request->input('name');
        $message->email=$request->input('email');
        $message->subject=$request->input('subject');
        $message->message=$request->input('message');
        $message->save();
        return redirect('/contact')->with('success','Your message has been sent. thank you!');
    }
    
}