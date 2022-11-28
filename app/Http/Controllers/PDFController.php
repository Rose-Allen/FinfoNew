<?php

namespace App\Http\Controllers;


use App\Models\Check;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function check(Check $check)
    {
        return view('pdf.3', compact('check'));
    }

    public function check_generate(Check $check)
    {
        $pdf = PDF::loadView('pdf.3', compact('check'));

        return $pdf->download('demo.pdf');

    }

    public function act()
    {
        return view('act.9');
    }

    public function act_generate()
    {
        $pdf = PDF::loadView('act.9');

        return $pdf->download('act.pdf');
    }


}
