<?php

namespace App\Http\Controllers;

use App\Announcements;


use Illuminate\Http\Request;


class AnnouncementsControl extends Controller
{
    public function index(){
        $data = Announcements::all();
        return view('dashboard.dashboard')->with('datas',$data);
    } 
    public function create(){
        return view('dashboard.add_announcement');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required'
        ]);
        $announcement = new Announcements([
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
            'author'=>$request->get('author')
        ]);
        $announcement->save();
        return redirect('dashboard/announcement')->with('success','announcement has been added');
    }
}