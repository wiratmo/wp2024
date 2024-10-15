<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    public function _permohonan()
    {
        // $data = ['title' => 'Judul PDF', 'content' => 'Isi PDF Anda'];

        // Load view dan buat PDF
        $pdf = Pdf::loadView('pdf.permohonan');

        // Unduh PDF
        return $pdf;
    }
}
