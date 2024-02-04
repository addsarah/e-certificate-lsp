<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SertifikatController extends Controller
{
    
    public function index(Request $request)
    {
        $sertifikat=Sertifikat::orderBy('tanggal','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $sertifikat = Sertifikat::where('tanggal','LIKE',"%$filterKeyword")->paginate(1);
        }
        return view('sertifikat.index',compact('sertifikat'));
    }

    public function create()
    {
        $sertifikat = Sertifikat::all();
        return view('sertifikat.create', compact('sertifikat'));
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'pesertas_id' => 'required',
            'deskripsi' => 'required',
            'nama_ceo' => 'required',
            'nama_mentor' => 'required',
            'nama_perusahaan' => 'required',
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
        $extention_ttdceo = $gambar_ttdceo->getClientOriginalExtension();
        $namafoto_ttdceo = "sertifikat_ttdceo/" . date('YmdHis') . "." . $extention_ttdceo;
        $upload_path_ttdceo = "uploads/sertifikat_ttdceo";
        $gambar_ttdceo->move($upload_path_ttdceo, $namafoto_ttdceo);
        $input['gambar_ttdceo'] = $namafoto_ttdceo;
    
        // Upload gambar_ttdmentor
        $gambar_ttdmentor = $request->file('gambar_ttdmentor');
        $extention_ttdmentor = $gambar_ttdmentor->getClientOriginalExtension();
        $namafoto_ttdmentor = "sertifikat_ttdmentor/" . date('YmdHis') . "." . $extention_ttdmentor;
        $upload_path_ttdmentor = "uploads/sertifikat_ttdmentor";
        $gambar_ttdmentor->move($upload_path_ttdmentor, $namafoto_ttdmentor);
        $input['gambar_ttdmentor'] = $namafoto_ttdmentor;
    
        Sertifikat::create($input);
    
        return redirect()->route('sertifikat.index')->with('success', 'Data Sertifikat berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $sertifikat = sertifikat::findOrfail($id);
        return view('sertifikat.show',compact('sertifikat'));
    }

   
    public function edit(string $id)
    {
        $sertifikat = sertifikat::findOrfail($id);
        return view('sertifikat.edit',compact('sertifikat'));
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
            'nama_perusahaan' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required|date',
            'gambar_ttdceo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'gambar_ttdmentor' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sertifikat.edit', ['id' => $id])->withInput()->withErrors($validator);
        }

        // Update gambar_ttdceo jika ada
        if ($request->hasFile('gambar_ttdceo')) {
            $gambar_ttdceo = $request->file('gambar_ttdceo');
            $extention_ttdceo = $gambar_ttdceo->getClientOriginalExtension();
            $namafoto_ttdceo = "sertifikat_ttdceo/" . date('YmdHis') . "." . $extention_ttdceo;
            $upload_path_ttdceo = "uploads/sertifikat_ttdceo";
            $gambar_ttdceo->move($upload_path_ttdceo, $namafoto_ttdceo);
            $input['gambar_ttdceo'] = $namafoto_ttdceo;
        }

        // Update gambar_ttdmentor jika ada
        if ($request->hasFile('gambar_ttdmentor')) {
            $gambar_ttdmentor = $request->file('gambar_ttdmentor');
            $extention_ttdmentor = $gambar_ttdmentor->getClientOriginalExtension();
            $namafoto_ttdmentor = "sertifikat_ttdmentor/" . date('YmdHis') . "." . $extention_ttdmentor;
            $upload_path_ttdmentor = "uploads/sertifikat_ttdmentor";
            $gambar_ttdmentor->move($upload_path_ttdmentor, $namafoto_ttdmentor);
            $input['gambar_ttdmentor'] = $namafoto_ttdmentor;
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
