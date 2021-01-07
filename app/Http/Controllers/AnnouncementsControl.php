<?php

namespace App\Http\Controllers;

use App\Announcements;


use Illuminate\Http\Request;


class AnnouncementsControl extends Controller
{
    public function create(){
        return view('dashboard.add_announcement');
    }

    public function store(Request $request){

        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'body'=>'required'
        ]);
        $announcement = new announcements;
        $announcement->title = $request->input('title');
        $announcement->author=$request->input('author');
        $announcement->body=$request->input('author');
        $announcement->save();
        return redirect('/dashboard')->with('success','new announcement added');
    }
    
}