@extends('admin.admin_master')

@section('title')
    Edit Data Sertifikat
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Data sertifikat</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('sertifikat.update', [$sertifikat->id]) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
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
                                <label class="col-sm-2 label-control">Deskripsi</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Input Deskripsi Pelatihan" name="deskripsi"
                                        value="{{ $sertifikat->deskripsi }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama CEO</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Input nama ceo" name="nama_ceo"
                                        value="{{ $sertifikat->nama_ceo }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Pelatih</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Input nama pelatih" name="nama_mentor"
                                        value="{{ $sertifikat->nama_mentor }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Instansi</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Input nama instansi" name="nama_instansi"
                                        value="{{ $sertifikat->nama_instansi }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Tempat</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Input tempat" name="tempat"
                                        value="{{ $sertifikat->tempat }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Tanggal</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" required="true"
                                        placeholder="Input tanggal" name="tanggal"
                                        value="{{ $sertifikat->tanggal }}">
                                </div>
                            </div>
                            <div class="form-group" align="center">
                                <label for="gambar_ttdceo">
                                    <img class="img-thumbnail" src="{{ asset('uploads/' . $sertifikat->gambar_ttdceo) }}" width="150px" />
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar_ttdceo" class="custom-file-input" id="gambar_ttdceo">
                                        <label class="custom-file-label" for="gambar_ttdceo"></label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Edit Gambar TTD CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="center">
                                <label for="gambar_ttdmentor">
                                    <img class="img-thumbnail" src="{{ asset('uploads/' . $sertifikat->gambar_ttdmentor) }}" width="150px" />
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar_ttdmentor" class="custom-file-input" id="gambar_ttdmentor">
                                        <label class="custom-file-label" for="gambar_ttdmentor"></label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Edit Gambar TTD Pelatih</span>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Edit</button>
                            <button type="submit" class="btn btn-danger float-right">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection