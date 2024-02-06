<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codely</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #9bd4fd;">
        <div class="container">
            <a class="navbar-brand" href="#">Codely</a>
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
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">

                        <form action="{{ url('/user') }}" method="post">
                            @csrf
                            <input type="text" name="nama" class="form-control mb-3" id="nama" placeholder="Tulis nama anda">
                            
                            
                        </div>
                        <div class="col-4">
                        <button type="submit" class="btn btn-outline-primary">Cari</button>
                    </form>

                    </div>
                </div>
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
                            <th>No. Sertifikat</th>
                            <th>Tema Pelatihan</th>
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