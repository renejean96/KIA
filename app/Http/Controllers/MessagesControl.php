<?php

namespace App\Http\Controllers;

use App\Messages;


use Illuminate\Http\Request;


class MessagesControl extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $messages = Messages::orderBy('created_at','desc')->paginate(3);
        return view('dashboard.view_message')->with('messages',$messages);
    }
    public function destroy($id) {
     
        $announcement = Messages::where('id', '=', $id)->delete();
        
        return redirect('/dashboard');
    }
    
}