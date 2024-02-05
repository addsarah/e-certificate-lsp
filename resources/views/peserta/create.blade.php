@extends('admin.admin_master')

@section('title')
Tambah Data peserta
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="col-md-12">
                  @include('alert.error')
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Tambah Data peserta</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form action="{{ route('peserta.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label class="col-sm-2 label-control">Nama Peserta</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="input nama peserta" name="nama_peserta" value="{{old('nama_peserta')}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 label-control">Nomor Sertifikat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" required="true" placeholder="Input Nomor Sertifikat"
                                    name="no_serti" value="{{ old('no_serti') }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 label-control">Tema Pelatihan</label>
                            <div class="col-sm-12">
                                <select name="tema_pel" class="form-control">
                                    <option label="Pilih Tema Pelatihan"></option>
                                    <option value="be">Back End Academy</option>
                                    <option value="fe">Front End Academy</option>
                                    <option value="pro">Profesional Academy</option>
                                    <option value="ui">UI / UX Academy</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary col-sm-2">Add</button>
                            <a href="{{ route('peserta.index') }}" class="btn btn-danger col-sm-2">Cancel</a>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
        
                  </div>           
                 </div>
        </div>
    </section>
@endsection