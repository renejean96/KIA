<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to this application 2020';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function staff(){
        
        return view('pages.staff');
    }
    public function calender(){

        return view('pages.calender');

    }
    public function aboutSchool(){
        
        return view('pages.about_school');
    }

    public function announcements(){
        return view('pages.announcements');
    }

    public function announcement(){
        return view('pages.announcement');
    }
}

