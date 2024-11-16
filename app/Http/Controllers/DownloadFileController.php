<?php

namespace App\Http\Controllers;


use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    public function _permohonan(Request $request)
    {
        $industryId = $request->industryId;
        $user = User::studentSubmission($industryId);

        $pdf = Pdf::loadView('pdf.permohonan', compact("user"));

        return $pdf->stream('download.pdf');
    }
}
