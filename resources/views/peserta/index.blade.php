@extends('admin.admin_master')

@section('title')
    Data peserta 
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="box-header with-border">
                    @if(Request::get('keyword'))
                   <a class="btn btn-app bg-info"href="{{ route('peserta.index')}}" >
                 <i class="fas fa-recycle"></i> Reset</a>  
               @else
               <a class="btn btn-app bg-success"href="{{ route('peserta.create')}}" >
                 <i class="fas fa-plus"></i> Tambah</a>
               @endif
               <a target="_blank" href = "{{route('cetak_peserta')}}" class="btn btn-danger float-left" ><i class="fas fa-print"></i> Print PDF</a>
               <div class="col-md-3 ml-auto">
                <form method="get" action="{{ route('peserta.index') }}">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-sm" id="keyword" name="keyword"
                            value="{{ request('nama_peserta') }}" placeholder="Search by Nama Peserta">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
                </div>
                @if (Request::get('keyword'))
                <div class="alert alert-info alert-block">
                Hasil pencarian peserta dengan keyword: <b>{{Request::get('keyword')}}</b>
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>No Sertifikat</th>
                            <th>Tema Pelatihan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $row)
                            <tr>
                                <td>{{ $loop->iteration + ($peserta ->perpage() * ($peserta->currentPage()-1))}}</td>
                                <td>{{ $row->nama_peserta }}</td>
                                <td>{{$row->no_serti}}</td>
                                <td>
                                    @switch($row->tema_pel)
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
                                    {{ $row->nama_pel }}
                                    @endswitch
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('peserta.destroy', [$row->id]) }}"
                                        onsubmit="return confirm('Apakah anda yakin akan menghapus peserta dengan nama,{{ $row->nama_peserta }} ?')">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                         <a class="btn btn-info" href="{{ route('peserta.edit', [$row->id]) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ route('peserta.show', [$row->id]) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $peserta->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection