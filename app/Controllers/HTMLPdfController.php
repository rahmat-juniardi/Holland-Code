<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Dompdf\Dompdf;

class HTMLPdfController extends Controller
{

    public function index()
    {
        return view('index');
    }

    function convertHTMLToPdf()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('index'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
