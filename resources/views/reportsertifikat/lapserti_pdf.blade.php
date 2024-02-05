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
            max-width: 600px;
            margin: 50px auto;
            border: 2px solid #000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 100px;
        }

        .header {
            color: #0066cc;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .info {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .ttd img {
            max-width: 150px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .ceo-info,
        .mentor-info {
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
        @foreach($R_sertifikat as $row)
        <img src="{{ public_path('images/logo.png') }}" alt="Logo" class="logo" />
        <h1 class="header">Sertifikat</h1>
        <p class="info">{{ $row->peserta->no_serti }}</p>
        <p class="info">Diberikan Kepada {{ $row->peserta->nama_peserta }}</p>
        <p class="info">Atas Kelulusannya pada Kelas Pelatihan "{{ $row->peserta->tema_pel }}", "{{ $row->deskripsi }}"</p>
        <p class="info">Yang diselenggarakan oleh {{ $row->nama_instansi }}</p>
        <p class="info">{{ $row->tempat }}, {{ strftime('%d %B %Y', strtotime($row->tanggal)) }}</p>
        
        <!-- Tanda Tangan CEO -->
        <div class="ttd ceo-info">
            <img src="{{ asset('uploads/'.$row->gambar_ttdceo) }}" alt="Tanda Tangan CEO">
            <p>{{ $row->nama_ceo }}</p>
        </div>

        <!-- Tanda Tangan Mentor -->
        <div class="ttd mentor-info">
            <img src="{{ asset('uploads/'.$row->gambar_ttdmentor) }}" alt="Tanda Tangan Mentor">
            <p>{{ $row->nama_mentor }}</p>
        </div>
        @endforeach
    </div>
</body>
</html>
