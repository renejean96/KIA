<?php

namespace App\Http\Controllers;

use App\Announcements;


use Illuminate\Http\Request;


class AnnouncementsControl extends Controller
{
    public function index(){
        $announcements = Announcements::orderBy('created_at','desc')->paginate(3);
        return view('pages.announcements')->with('announcements',$announcements);
    }
    public function create(){
        return view('dashboard.add_announcement');
    }

    public function store(Request $request){

        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'body'=>'required'
        ]);
        $announcement = new Announcements;
        $announcement->title = $request->input('title');
        $announcement->author=$request->input('author');
        $announcement->body=$request->input('body');
        $announcement->save();
        return redirect('/dashboard')->with('success','new announcement added');
    }

    public function destroy($id) {
     
        $announcement = Announcements::where('id', '=', $id)->delete();
        
        return redirect('/dashboard');
    }
    
}