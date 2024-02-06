@extends('admin.admin_master')

@section('title')
    Data Sertifikat
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="box-header with-border">
                    @if (Request::get('keyword'))
                        <a class="btn btn-app bg-info"href="{{ route('sertifikat.index') }}">
                            <i class="fas fa-recycle"></i> Reset</a>
                    @else
                        <a class="btn btn-app bg-success"href="{{ route('sertifikat.create') }}">
                            <i class="fas fa-plus"></i> Tambah</a>
                    @endif
                    <div class="col-md-3 ml-auto">
                        <form method="get" action="{{ route('sertifikat.index') }}">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-sm" id="keyword" name="keyword"
                                    value="{{ request('keyword') }}" placeholder="Search by Nama Peserta">
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
                        Hasil pencarian sertifikat dengan keyword: <b>{{ Request::get('keyword') }}</b>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>No Sertifikat</th>
                            <th>Tema Pelatihan</th>
                            <th>Nama Mentor</th>
                            <th>Nama Instansi</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sertifikat as $row)
                            <tr>
                                <td>{{ $loop->iteration + $sertifikat->perpage() * ($sertifikat->currentPage() - 1) }}</td>
                                <td>{{ $row->peserta->nama_peserta }}</td>
                                <td>{{ $row->peserta->no_serti }}</td>
                                <td>{{ $row->peserta->tema_pel }}</td>
                                <td>{{ $row->nama_mentor }}</td>
                                <td>{{ $row->nama_instansi }}</td>
                                <td>{{ $row->tanggal }}</td>
                                <td>
                                    <form method="POST" action="{{ route('sertifikat.destroy', [$row->id]) }}"
                                        onsubmit="return confirm('Apakah anda yakin akan menghapus,{{ $row->name }}?..')">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <a class="btn btn-info" href="{{ route('sertifikat.edit', [$row->id]) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ route('sertifikat.show', [$row->id]) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-success" href="{{ route('cetak_sertifikat', [$row->id]) }}">
                                            <i class="fas fa-print"></i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sertifikat->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection
