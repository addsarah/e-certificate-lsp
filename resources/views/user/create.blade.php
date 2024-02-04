@extends('admin.admin_master')

@section('title')
Data User
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
                        <h3 class="card-title">Form Tambah Data User</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form action="{{ route('user.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputName1" class="col-sm-2 label-control">Nama</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Name" name="name" value="{{old('name')}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1" class="col-sm-2 label-control">Email</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email" value="{{old('email')}}">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label>Password</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" required="true" placeholder="Enter Password" name="password" value="{{old('password')}}">
                            </div>
                          </div>

                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary col-sm-2">Add</button>
                            <a href="{{ route('user.index') }}" class="btn btn-danger col-sm-2">Cancel</a>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
        
                  </div>           
                 </div>
        </div>
    </section>
@endsection