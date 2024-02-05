<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <style>
        body {
            background: url('{{ public_path('images/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff;
            text-align: center;
        }

        .sertifikat-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 100px;
        }

        .header {
            color: #0066cc;
        }

        .nama-penerima {
            font-size: 18px;
        }

        .nomor-sertifikat {
            font-size: 18px;
        }

        .diberikan-kepada {
            font-size: 18px;
        }

        .atas_kelulusannya {
            font-size: 18px;
        }

        .tema-pelatihan {
            font-size: 18px;
        }

        .ttd-ceo {
            max-width: 150px;
            margin-top: 20px;
        }

        .ttd-mentor {
            max-width: 150px;
            margin-top: 20px;
        }

        .ceo-info,
        .mentor-info {
            margin-top: 10px;
            font-size: 16px;
        }

        .tanggal-tempat {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="sertifikat-container">
        @foreach ($R_sertifikat as $row)
        <img src="{{ public_path('images/logo.png') }}" alt="Logo" class="logo">
        <h1 class="header">Sertifikat</h1>
        <p class="nomor-sertifikat">{{ $row->peserta->no_serti }}</p>
        <p class="diberikan-kepada">Diberikan kepada</p>
        <p class="nama-penerima">{{ $row->peserta->nama_peserta }}</p>
        <p class="atas-kelulusannya">Atas Kelulusannya pada kelas</p>
        <p class="tema-pelatihan">{{ $row->tema_pel }}</p>
        <p class="tanggal-tempat">{{ $row->tanggal }}, {{ $row->tempat }}</p>
        <img src="{{ asset('images/ttd_ceo.png') }}" alt="Tanda Tangan CEO" class="ttd-ceo">
        <div class="ceo-info">
            <p>{{ $row->nama_ceo }}</p>
            <p>Nama CEO</p>
        </div>
        <img src="{{ asset('images/ttd_mentor.png') }}" alt="Tanda Tangan Mentor" class="ttd-mentor">
        <div class="mentor-info">
            <p>{{ $row->nama_mentor }}</p>
            <p>Nama Mentor</p>
        </div>
        @endforeach
    </div>
</body>
</html>
