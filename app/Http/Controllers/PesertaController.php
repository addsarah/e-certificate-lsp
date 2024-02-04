<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PesertaController extends Controller
{
    public function index(Request $request)
    {
        $peserta=Peserta::orderBy('nama_peserta','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $peserta = Peserta::where('nama_peserta','LIKE',"%$filterKeyword")->paginate(1);
        }
        return view('peserta.index',compact('peserta'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'nama_peserta'=>'required|max:150',
            'no_serti'=>'required|numeric',
            'tema_pel'=>'required',
        ]);
        if($validasi->fails())
        {
            return redirect()->route('peserta.create')->withInput()->withErrors($validasi);
        }

        Peserta::create($simpan);
        Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        return redirect()->route('peserta.index')->with('success','Peserta berhasil ditambah');
        
    }

   
    public function show(string $id)
    {
        $peserta = Peserta::findOrfail($id);
        return view('peserta.show',compact('peserta'));
    }

   
    public function edit($id)
    {
        $peserta = Peserta::findOrfail($id);
        return view('peserta.edit',compact('peserta'));
    }

    
    public function update(Request $request,$id)
    {
        $peserta = Peserta::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data, [
        'nama_peserta' => 'required|max:150',
        'no_serti' => 'required|numeric', // Corrected from 'require' to 'required'
        'tema_pel' => 'required',
    ]);

    if ($validasi->fails()) {
        return redirect()->route('peserta.edit', ['id' => $id])->withInput()->withErrors($validasi);
    }

    $peserta->update($data);
    Alert::success('Berhasil', 'Data Berhasil Diedit');
    return redirect()->route('peserta.index')->with('success', 'Data Peserta berhasil diupdate');
    }

    
    public function destroy(string $id)
    {
        $data = Peserta::findOrfail($id);
        $data->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('peserta.index')->with('status','Peserta berhasil di hapus');
    }
}
