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
                        <form action="{{ route('sertifikat.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama peserta</label>
                                    <select class="form-control" name="pesertas_id">
                                        @foreach ($pesertas as $peserta)
                                            <option value="{{ $peserta->id }}">{{ $peserta->nama_peserta }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Sertifikat</label>
                                    <select class="form-control" name="id_peserta">
                                        @foreach ($pesertas as $peserta)
                                            <option value="{{ $peserta->id }}">{{ $peserta->no_serti }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tema Pelatihan</label>
                                    <select class="form-control" name="id_peserta">
                                        @foreach ($pesertas as $peserta)
                                            <option value="{{ $peserta->id }}">{{ $peserta->tema_pel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" type="text" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Input Deskripsi Pelatihan, maksimal 254 kata"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nama Ceo</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="input nama ceo" name="nama_ceo" value="{{old('nama_ceo')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Pelatih</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="input nama pelatih" name="nama_mentor" value="{{old('nama_mentor')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 label-control">Nama Instansi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="input nama instansi" name="nama_instansi" value="{{old('nama_instansi')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 label-control">Tempat</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="input Tempat" name="tempat" value="{{old('tempat')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 label-control">Tanggal Pelatihan</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">TTD Ceo</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" name="gambar_ttdceo" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">TTD Pelatih</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" name="gambar_ttdmentor" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="{{ route('sertifikat.index') }}" class="btn btn-danger float-right">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
