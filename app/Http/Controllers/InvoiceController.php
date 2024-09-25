<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function showinvoice()
    {
        return view('invoice');
    }

    public function openPDFInBrowser()
    {
        $pdf = Pdf::loadView('invoice');
        return $pdf->stream('browserinvoice.pdf');
    }

    public function downloadPDF()
    {
        $pdf = Pdf::loadView('invoice');
        return $pdf->download('downloadedinvoice.pdf');
    }
}
