<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicCalendar;

class CalendarController extends Controller
{
    public function index () {
        
        $data = AcademicCalendar::orderBy('academic_calendars.created_at', 'DESC')->get();
        return view('dashboard.view_calender')->with('data' , $data);        
    }

    public function create() {
        return view('dashboard.add_event');
    }

    public function store(Request $request) {
        
        $this->validate($request, [
            'period' => 'required',
            'details' => 'required'
        ]);

        $event = AcademicCalendar::create([
            'period' => $request['period'],
            'details' => $request['details']
        ]);

        return redirect('/events');        
    }

    public function update(Request $request, $id) {
        
        $this->validate($request, [
            'period' => 'required',
            'details' => 'required'
        ]);
        
        $event = AcademicCalendar::findOrFail($id)->update([
            'period' => $request['period'],
            'details' => $request['details']
        ]); 

        return redirect('/events');
    }

    public function destroy($id) {
     
        $event = AcademicCalendar::where('id', '=', $id)->delete();
        
        return redirect('/events');
    }
}