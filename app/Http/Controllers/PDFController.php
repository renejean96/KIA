<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pupil;
use PDF;

class PDFController extends Controller
{
    public function printForm() {

        $data = Pupil::where('id', '=', $id)->first();

        $pdf = PDF::loadView('pdf.registrationForm', $data);
        return $pdf->stream('registrationForm.pdf');
    }
}
