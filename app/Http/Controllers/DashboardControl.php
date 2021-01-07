<?php

namespace App\Http\Controllers;
use App\Announcements;
use Illuminate\Http\Request;

class DashboardControl extends Controller
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
        $announcements = Announcements::orderBy('created_at','desc')->paginate(3);
        return view('dashboard.dashboard')->with('announcements',$announcements);
    } 

    public function viewAnnouncement(){
        return view('dashboard.view_announcement');
    }

    public function viewCalender(){
        return view('dashboard.view_calender');
    }

    public function viewMember(){
        return view('dashboard.view_member');
    }

    public function viewMessage(){
        return view('dashboard.view_message');
    }

    public function addAnnouncement(){
        return view('dashboard.add_announcement');
    }

    public function addMember(){
        return view('dashboard.add_member');
    }

    public function addEvent(){
        return view('dashboard.add_event');
    }
    
}
