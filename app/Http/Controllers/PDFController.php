<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pupil;
use PDF;

class PDFController extends Controller
{
    public function printForm() {

        $id = 1;
        $data = Pupil::where('id', '=', $id)->first();

        $pdf = PDF::loadView('pdf.registrationForm', $data);
        return $pdf->stream('registrationForm.pdf');
    }
}
