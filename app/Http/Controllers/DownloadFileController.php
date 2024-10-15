<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    public function _permohonan()
    {
        // $data = ['title' => 'Judul PDF', 'content' => 'Isi PDF Anda'];

        // return view('pdf.permohonan');
        $pdf = Pdf::loadView('pdf.permohonan');


        return $pdf->stream('download.pdf');
    }
}
