<?php

namespace App\Http\Controllers;

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
    public function cetak_sertifikat()
    {
        $R_sertifikat = Sertifikat::orderBy('nama_instansi', 'DESC')->get();
        $pdf = 'PDF'::loadView('reportsertifikat.lapserti_pdf', compact('R_sertifikat'))->setPaper('landscape');
        return $pdf->stream();
        
    }
}
