<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #000;
            text-align: center;
        }

        .sertifikat-container {
            max-height: 1241px;
            max-width: 1754px;
            margin: 50px auto;
            border: 2px solid rgb(32, 136, 255);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 200px;
        }

        .header {
            color: #0066cc;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .info {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="sertifikat-container">
        @foreach($R_sertifikat as $row)
            <img src="{{ public_path('images/logo.png') }}" alt="Logo" class="logo" />
            <h1 class="header">Sertifikat</h1>
            <p class="info">{{ $row->peserta->no_serti }}</p>
            <p class="info">Diberikan Kepada</p>
            <p class="info">{{ $row->peserta->nama_peserta }}</p>
            <p class="info">Atas Kelulusannya pada Kelas Pelatihan "{{ $row->peserta->tema_pel }}"</p>
            <p class="info">{{ $row->deskripsi }}</p>
            <p class="info">Yang diselenggarakan oleh {{ $row->nama_instansi }}</p>
            <p class="info">{{ $row->tempat }}, {{ strftime('%d %B %Y', strtotime($row->tanggal)) }}</p>
        @endforeach
    </div>
</body>
</html>