<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class ReportSertifikatController extends Controller
{
    public function index()
    {
        $sertifikat = Sertifikat::orderBy('nama_instansi', 'DESC')->simplePaginate(7);
        return view('reportsertifikat.index', compact('sertifikat'));
    }

    // This method is for printing the certificate table report
    public function cetak_sertifikat($id)
    {
        $sertifikat = Sertifikat::find($id);

        if (!$sertifikat) {
            return redirect()->route('sertifikat.index')->with('error', 'Sertifikat tidak ditemukan.');
        }

        $pdf = PDF::loadView('reportsertifikat.lapserti_pdf', compact('sertifikat'))->setPaper('landscape');
        return $pdf->stream();
    }
}
