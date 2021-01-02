<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function index () {
        
        $data = Staff::orderBy('staff.created_at', 'DESC')->get();
        return view('dashboard.view_member')->with('data' , $data);        
    }

    public function store(Request $request) {
        
        $this->validate($request, [
            'names' => 'required',
            'phone' => 'required'
        ]);

        $member = Staff::create([
            'names' => $request['names'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'position' => $request['position'],
            'description' => $request['description'],
            'photo' => null,
        ]);

        return redirect('/staff');        
    }

    public function update(Request $request, $id) {
        
        $this->validate($request, [
            'names' => 'required',
            'phone' => 'required'
        ]);
        
        $member = Staff::findOrFail($id)->update([
            'names' => $request['names'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'position' => $request['position'],
            'description' => $request['description'],
            'photo' => null,
        ]); 

        return redirect('/staff');
    }

    public function destroy($id) {
     
        $member = Staff::where('id', '=', $id)->delete();
        
        return redirect('/staff');
    }
}