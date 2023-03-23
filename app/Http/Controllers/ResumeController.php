<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('resume', compact('user'));
    }

    public function download()
    {
        $user = auth()->user();
        $pdf = Pdf::loadView('pdfResume', compact('user'));

        return $pdf->download('resume.pdf');
    }
}
