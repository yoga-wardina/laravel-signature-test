<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

class PDFController extends Controller
{
    public function generatePDF()
    {

        // Generate the PDF
        $pdf = SnappyPdf::loadView('pdf.contract')
                ->setOption('page-width', '210mm')
                ->setOption('page-height', '297mm')
                ->setOption('orientation', 'potrait');


        // Return the PDF response
        return $pdf->download('contract.pdf');
    }
}
