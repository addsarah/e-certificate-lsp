<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SertifikatController extends Controller
{
    
    public function index(Request $request)
    {
        $sertifikat = Sertifikat::orderBy('nama_instansi', 'asc')
        ->join('pesertas', 'sertifikats.id_peserta', '=', 'pesertas.id')
        ->select('sertifikats.*', 'pesertas.nama_peserta')
        ->with('peserta');

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            $sertifikat->where('pesertas.nama_peserta', 'like', "%$filterKeyword%");
        }

        $sertifikat = $sertifikat->paginate(25);
        return view('sertifikat.index', compact('sertifikat'));
    }

    public function create()
    {
        $pesertas = Peserta::all();
        return view('sertifikat.create', compact('pesertas'));
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'pesertas_id' => 'required',
            'deskripsi' => 'required',
            'nama_ceo' => 'required',
            'nama_mentor' => 'required',
            'nama_instansi' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required|date',
            'gambar_ttdceo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'gambar_ttdmentor' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('sertifikat.create')->withInput()->withErrors($validator);
        }
    
        // Upload gambar_ttdceo
        $gambar_ttdceo = $request->file('gambar_ttdceo');
        $extention = $gambar_ttdceo->getClientOriginalExtension();
        
        if($request->file('gambar_ttdceo')->isValid()){
            $namafoto = "sertifikat/".date('YmdHis').".". $extention;
            $extention;
            $upload_path = "uploads/sertifikat";
            $request->file('gambar_ttdceo')->move($upload_path,$namafoto);
            $input['gambar_ttdceo'] = $namafoto;
        }
    
        // Upload gambar_ttdmentor
        $gambar_ttdmentor = $request->file('gambar_ttdmentor');
        $extention = $gambar_ttdmentor->getClientOriginalExtension();
        
        if($request->file('gambar_ttdmentor')->isValid()){
            $namafoto = "sertifikat/".date('YmdHis').".". $extention;
            $extention;
            $upload_path = "uploads/sertifikat";
            $request->file('gambar_ttdmentor')->move($upload_path,$namafoto);
            $input['gambar_ttdmentor'] = $namafoto;
        }
    
        Sertifikat::create($input);
    
        return redirect()->route('sertifikat.index')->with('success', 'Data Sertifikat berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $sertifikat = sertifikat::findOrfail($id);
        $sertifikat->load('peserta');
        return view('sertifikat.show',compact('sertifikat'));
    }

   
    public function edit(string $id)
    {
        $sertifikat = sertifikat::findOrfail($id);
        $pesertas = Peserta::all();

        return view('sertifikat.edit',compact('sertifikat','pesertas'));
    }

    
    public function update(Request $request, $id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'pesertas_id' => 'required',
            'deskripsi' => 'required',
            'nama_ceo' => 'required',
            'nama_mentor' => 'required',
            'nama_instansi' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required|date',
            'gambar_ttdceo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'gambar_ttdmentor' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        
        if ($validator->fails()) {
            return redirect()->route('sertifikat.create')->withInput()->withErrors($validator);
        }

        // Update gambar_ttdceo jika ada
        if($request->hasFile('gambar_ttdceo')){
            if($request->file('gambar_ttdceo')->isValid())
            {
                Storage::disk('upload')->delete($sertifikat->gambar_ttdceo);
                $gambar_ttdceo = $request->file('gambar_ttdceo');

                $extention = $gambar_ttdceo->getClientOriginalExtension();
                $namaFoto = "sertifikat/".date('YmdHis').".".$extention;
                $upload_path = 'uploads/sertifikat';
                $request->file('gambar_ttdceo')->move($upload_path,$namaFoto);
                $input['gambar_ttdceo'] = $namaFoto;
            }
         }

        // Update gambar_ttdmentor jika ada
        if($request->hasFile('gambar_ttdmentor')){
            if($request->file('gambar_ttdmentor')->isValid())
            {
                Storage::disk('upload')->delete($sertifikat->gambar_ttdmentor);
                $gambar_ttdmentor = $request->file('gambar_ttdmentor');

                $extention = $gambar_ttdmentor->getClientOriginalExtension();
                $namaFoto = "sertifikat/".date('YmdHis').".".$extention;
                $upload_path = 'uploads/sertifikat';
                $request->file('gambar_ttdmentor')->move($upload_path,$namaFoto);
                $input['gambar_ttdmentor'] = $namaFoto;
            }
         }

        $sertifikat->update($input);

        return redirect()->route('sertifikat.index')->with('success', 'Update Data Sertifikat berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $data = sertifikat::findOrfail($id);
        $data->delete();
        return redirect()->route('sertifikat.index')->with('status','sertifikat berhasil di hapus');
    }
}
