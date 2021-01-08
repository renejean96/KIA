<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicCalendar;
use App\Staff;
use App\Announcements;

class PagesController extends Controller
{
    public function index(){

        $data['title'] = 'Welcome';
        $data['home'] = 'active';
        $data['about'] = '';
        $data['calendar'] = '';
        $data['announcements'] = '';
        $data['contact'] = '';

        return view('pages.index', $data);
    }
    public function staff(){

        $data['title'] = 'Our staff members';        
        $data['home'] = '';
        $data['about'] = 'active';
        $data['calendar'] = '';
        $data['announcements'] = '';
        $data['contact'] = '';
        $data['members'] = Staff::where('level', '=', 1)->get();
        $data['teachers'] = Staff::where('level', '=', 2)->get();

        return view('pages.staff', $data);
    }
    public function calender(){

        $data['title'] = 'Academic Calendar';
        $data['home'] = '';
        $data['about'] = '';
        $data['calendar'] = 'active';
        $data['announcements'] = '';
        $data['contact'] = '';
        $data['events'] = AcademicCalendar::orderBy('academic_calendars.created_at', 'DESC')->get();

        return view('pages.calender', $data);

    }
    public function aboutSchool(){

        $data['title'] = 'About our school';
        $data['home'] = '';
        $data['about'] = 'active';
        $data['calendar'] = '';
        $data['announcements'] = '';
        $data['contact'] = '';

        return view('pages.about_school', $data);
    }

    public function announcements(){

        $data['title'] = 'Annoucements';
        $data['home'] = '';
        $data['about'] = '';
        $data['calendar'] = '';
        $data['announcements'] = 'active';
        $data['contact'] = '';
        $data['anns'] = Announcements::orderBy('announcements.created_at', 'DESC')->get();

        return view('pages.announcements', $data);
    }

    public function announcement(){

        $data['title'] = 'Announcement';
        $data['home'] = '';
        $data['about'] = '';
        $data['calendar'] = '';
        $data['announcements'] = '';
        $data['contact'] = '';

        return view('pages.announcement', $data);
    }

    public function contact(){

        $data['title'] = 'Get in touch with us';
        $data['home'] = '';
        $data['about'] = '';
        $data['calendar'] = '';
        $data['announcements'] = '';
        $data['contact'] = 'active';

        return view('pages.contact', $data);
    }

    public function registration() {
      
        $data['title'] = 'Register your kid today';        
        $data['home'] = '';
        $data['about'] = '';
        $data['calendar'] = '';
        $data['announcements'] = '';
        $data['contact'] = '';

        return view('pages.registration', $data);
    }
}

