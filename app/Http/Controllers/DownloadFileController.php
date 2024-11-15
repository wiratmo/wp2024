<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DownloadFileController extends Controller
{
    public function _permohonan(Request $request)
    {
        $industryId = $request->industryId;
        // $id_user = Auth::user()->id;
        $user = User::studentSubmission($industryId);

        $pdf = Pdf::loadView('pdf.permohonan', compact("user"));

        return $pdf->stream('download.pdf');
    }
}
