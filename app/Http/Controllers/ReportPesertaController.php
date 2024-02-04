<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class ReportPesertaController extends Controller
{
    public function index()
    {
    $peserta=Peserta::orderBy('nama_peserta','DESC')->simplePaginate(7);
    return view('reportpeserta.index',compact('peserta'));
    }

    //ini method untuk mencetak laporan tabel peserta
    public function cetak_peserta()
    {
       $R_peserta = Peserta::orderBy('nama_peserta','DESC')->get();
       $pdf = 'PDF'::loadview('reportpeserta.lappeser_pdf',compact('R_peserta'));
       return $pdf->stream();
    }
}