@extends('admin.admin_master')
@section('admin.index')
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>
    
                    <div class="info-box-content">
                    <span class="info-box-text">Peserta</span>
                    <span class="info-box-number">{{ \App\Models\Peserta::count() }}</span>
                </div>
                    <!-- /.info-box-content -->
                </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-award"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Pelatihan</span>
                <span class="info-box-number">{{ \App\Models\Sertifikat::count() }}</span>                
            </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
{{-- 
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Transaksi</span>
                <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Member</span>
                <span class="info-box-number">7.000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col --> --}}
        </div>

        </div><!--/. container-fluid -->
    </section>
@endsection