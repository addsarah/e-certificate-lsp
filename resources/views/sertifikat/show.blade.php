@extends('admin.admin_master')
@section('title')
Detail Data Sertifikat 
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info"href="{{ route('sertifikat.index')}}" >
                  <i class="fas fa-angle-double-left"></i> Back</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama Peserta</td>
                       <td>:</td>
                       <td>{{ $sertifikat->peserta->nama_peserta }}</td>
                   </tr>
                   <tr>
                       <td>Nomor Sertifikat</td>
                       <td>:</td>
                       <td>{{ $sertifikat->peserta->no_serti  }}</td>
                   </tr>
                   <tr>
                    <td>Tema Pelatihan</td>
                    <td>:</td>
                    <td>{{ $sertifikat->peserta->tema_pel  }}</td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>{{ $sertifikat->deskripsi  }}</td>
                </tr>
                <tr>
                    <td>Nama Pembimbing</td>
                    <td>:</td>
                    <td>{{ $sertifikat->nama_mentor  }}</td>
                </tr>
                <tr>
                    <td>Nama Instansi</td>
                    <td>:</td>
                    <td>{{ $sertifikat->nama_instansi  }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{ $sertifikat->tanggal  }}</td>
                </tr>
                <tr>
                    <td>Tanda tangan Pimpinan</td>
                    <td>:</td>
                    <td>
                        <img class="img-thumbnail" src="{{ asset('uploads/' . $sertifikat->gambar_ttdceo) }}" width="150px">
                    </td>
                </tr>
                <tr>
                    <td>Tanda tangan Mentor</td>
                    <td>:</td>
                    <td>
                        <img class="img-thumbnail" src="{{ asset('uploads/' . $sertifikat->gambar_ttdmentor) }}" width="150px">
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</div>


@endsection