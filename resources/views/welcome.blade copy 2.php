<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E - Sertif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #9bd4fd;">
        <div class="container">
            <a class="navbar-brand" href="#">E - Sertif</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @auth
                        <a class="nav-link" href="{{ route('peserta.index') }}">Dashboard</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="mb-3">
                <h3 class="text-center mb-3 " style="margin-top: 15rem">Dapatkan Sertifikatmu Disini</h3>
                <div class="box-header with-border">
                    @if (Request::get('keyword'))
                        <a class="btn btn-app bg-info"href="{{ route('sertifikat.index') }}">
                            <i class="fas fa-recycle"></i> Reset</a>
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
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-auto">
                        <p>Buat akses pembelajaranmu semakin mudah dengan Codely</p>

                    </div>
                    <div class="col-4"></div>
                </div>
            </div>


            <div class="table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Sertifikat</th>
                            <th>Tema Pelatihan</th>
                            <th>Nama Mentor</th>
                            <th>Nama Instansi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada hasil</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
