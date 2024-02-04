@extends('admin.admin_master')

@section('title')
    Edit Data Peserta
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Data peserta</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('peserta.update', [$peserta->id]) }}" method="POST" class="form-horizontal">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Peserta</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Input Nama Peserta" name="nama_peserta"
                                        value="{{ $peserta->nama_peserta }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nomor Sertifikat</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Input Nomor Sertfikat" name="no_serti"
                                        value="{{ $peserta->no_serti }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Tema Pelatihan: <span class="tx-danger">*</span></label>
                                <select name="tema_pel" class="form-control select2">
                                    <option value="digi-enterpre" @if ($peserta->tema_pel == 'digi-enterpre')  @endif> Digital Enterpreneurship Academy
                                    </option>
                                    <option value="pro" @if ($peserta->tema_pel == 'pro')  @endif>Profesional Academy
                                    </option>
                                    <option value="voc-gra" @if ($peserta->tema_pel == 'voc-gra')  @endif>Vocational School Graduate Academy
                                    </option>
                                    <option value="fre-gra" @if ($peserta->tema_pel == 'fre-gra')  @endif>Fresh Graduate Academy
                                    </option>
                                </select>
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
