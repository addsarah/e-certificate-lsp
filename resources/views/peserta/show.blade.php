@extends('admin.admin_master')
@section('title')
Detail Data Peserta {{ $peserta->nama_peserta }}
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                <a class="btn btn-app bg-info"href="{{ route('peserta.index')}}" >
                  <i class="fas fa-angle-double-left"></i> Back</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama Peserta</td>
                       <td>:</td>
                       <td>{{ $peserta->nama_peserta }}</td>
                   </tr>
                   <tr>
                       <td>Nomor Sertifikat</td>
                       <td>:</td>
                       <td>{{ $peserta->no_serti }}</td>
                   </tr>
                   <tr>
                    <td>Tema Pelatihan</td>
                    <td>:</td>
                    <td>
                        @switch($peserta->tema_pel)
                        @case('digi-enterpre')
                        Digital Enterpreneurship Academy
                        @break
                        @case('pro')
                        Profesional Academy
                        @break
                        @case('voc-gra')
                        Vocational School Graduate Academy
                        @break
                        @case('fre-gra')
                        Fresh Graduate Academy
                        @break
                        @default
                        {{ $peserta->nama_pel }}
                        @endswitch
                    </td>
                   </tr>
            </table>
            </div>
        </div>
    </div>
</div>


@endsection