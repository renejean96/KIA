<?php

namespace App\Http\Controllers;

use App\Pupil;
use App\PupilAddress;
use App\PupilFather;
use App\PupilMother;
use App\PupilGuardian;

use PDF;

use Illuminate\Http\Request;

class PupilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first-name' => 'required',
            'last-name' => 'required',
            'country' => 'required',
            'district' => 'required',
        ]);

        $pupil = Pupil::create([
            'firstName' => $request['first-name'],
            'lastName' => $request['last-name'],
            'nationality' => $request['nationality'],
            'dob' => $request['dob'],
            'sex' => $request['sex'],
            'lunch' => $request['lunch'],
            'breakfast' => $request['breakfast'],
            'transport' => $request['transport']                                    
        ]);

        $pupil_address = PupilAddress::create([
            'pupilId' => $pupil->id,
            'country' => $request['country'],
            'province' => $request['province'],
            'district' => $request['district'],
            'sector' => $request['sector'],
            'cell' => $request['cell'],
            'village' => $request['village']    
        ]);

        $pupil_father = PupilFather::create([
            'pupilId' => $pupil->id,
            'names' => $request['father-names'],
            'idn' => $request['father-idn'],
            'email' => $request['father-email'],
            'phone' => $request['father-phone'],
            'occupation' => $request['father-occupation']    
        ]);

        $pupil_mother = PupilMother::create([
            'pupilId' => $pupil->id,
            'names' => $request['mother-names'],
            'idn' => $request['mother-idn'],
            'email' => $request['mother-email'],
            'phone' => $request['mother-phone'],
            'occupation' => $request['mother-occupation']    
        ]);        

        $pupil_guardian = PupilGuardian::create([
            'pupilId' => $pupil->id,
            'names' => $request['guardian-names'],
            'idn' => $request['guardian-idn'],
            'email' => $request['guardian-email'],
            'phone' => $request['guardian-phone'],
            'occupation' => $request['guardian-occupation']    
        ]);

        $data['pupilId'] = $pupil->id;
        $data['firstname'] = $pupil->firstName;
        $data['lastname'] = $pupil->lastName;

        return view('pages.registration_success', $data);

        // $data['info'] = Pupil::where('id','=',$pupil->id)->get();
        // $data['address'] = PupilAddress::where('pupilId','=',$pupil->id)->get();
        // $data['father'] = PupilFather::where('pupilId','=',$pupil->id)->get();
        // $data['mother'] = PupilMother::where('pupilId','=',$pupil->id)->get();        
        // $data['guardian'] = PupilGuardian::where('pupilId','=',$pupil->id)->get();

        // $pdf = PDF::loadView('pdf.registrationForm', $data);
        // return $pdf->stream('registrationForm.pdf');        
    }

    public function printForm ($pupilId) {

        $data['info'] = Pupil::where('id','=',$pupilId)->get();
        $data['address'] = PupilAddress::where('pupilId','=',$pupilId)->get();
        $data['father'] = PupilFather::where('pupilId','=',$pupilId)->get();
        $data['mother'] = PupilMother::where('pupilId','=',$pupilId)->get();        
        $data['guardian'] = PupilGuardian::where('pupilId','=',$pupilId)->get();

        $pdf = PDF::loadView('pdf.registrationForm', $data);
        return $pdf->stream('registrationForm.pdf');        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function show(Pupil $pupil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function edit(Pupil $pupil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pupil $pupil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pupil $pupil)
    {
        //
    }
}
