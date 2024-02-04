@extends('admin.admin_master')

@section('title')
    Tambah Data Sertifikat
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="col-md-12">
                    @include('alert.error')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data Sertifikat</h3>
                        </div>
                        <form action="{{ route('sertifikat.store') }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama peserta</label>
                                    <select class="form-control" name="pesertas_id">
                                        @foreach ($peserta as $dataPeserta)
                                            <option value="{{ $dataPeserta->id }}">{{ $dataPeserta->nama_peserta }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Sertifikat</label>
                                    <select class="form-control" name="id_peserta">
                                        @foreach ($peserta as $dataPeserta)
                                            <option value="{{ $dataPeserta->id }}">{{ $dataPeserta->no_serti }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tema Pelatihan</label>
                                    <select class="form-control" name="id_peserta">
                                        @foreach ($peserta as $dataPeserta)
                                            <option value="{{ $dataPeserta->id }}">{{ $dataPeserta->tema_pel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary col-sm-2">Add</button>
                                <a href="{{ route('sertifikat.index') }}" class="btn btn-danger col-sm-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
