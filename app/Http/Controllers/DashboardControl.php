<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControl extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
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
