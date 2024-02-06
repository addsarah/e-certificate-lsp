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
            position: relative; /* Menetapkan posisi relatif pada container */
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

        /* Menambahkan gaya untuk tanda tangan CEO */
        .ttd-ceo {
            position: absolute;
            bottom: 20px; /* Menetapkan jarak dari bawah */
            left: 20px; /* Menetapkan jarak dari kiri */
            text-align: left; /* Menetapkan teks ke kiri */
        }

        /* Menambahkan gaya untuk tanda tangan Mentor */
        .ttd-mentor {
            position: absolute;
            bottom: 20px; /* Menetapkan jarak dari bawah */
            right: 20px; /* Menetapkan jarak dari kanan */
            text-align: right; /* Menetapkan teks ke kanan */
        }
    </style>
</head>
<body>
    <div class="sertifikat-container">
        @foreach($R_sertifikat as $row)
            <!-- Hanya menampilkan beberapa informasi untuk uji coba -->
            <h1 class="header">Sertifikat</h1>
            <p class="info">{{ $row->peserta->no_serti }}</p>
            <p class="info">Diberikan Kepada</p>
            <p class="info">{{ $row->peserta->nama_peserta }}</p>
            <p class="info">Atas Kelulusannya pada Kelas Pelatihan "{{ $row->peserta->tema_pel }}"</p>
            <p class="info">{{ $row->deskripsi }}</p>
            <p class="info">Yang diselenggarakan oleh {{ $row->nama_instansi }}</p>
            <p class="info">{{ $row->tempat }}, {{ strftime('%d %B %Y', strtotime($row->tanggal)) }}</p>

            <!-- Tanda Tangan CEO -->
            <div class="ttd-ceo">
                <img src="{{ asset('uploads/sertifikat_ttdmentor/' . $row->gambar_ttdmentor) }}" width="50px">
                <div class="ceo-info">
                    <p>{{ $row->nama_ceo }}</p>
                </div>
            </div>
    
            <!-- Tanda Tangan Mentor -->
            <div class="ttd-mentor">
                <img src="{{ asset('uploads/sertifikat_ttdmentor/' . $row->gambar_ttdmentor) }}" width="50px">
                <div class="mentor-info">
                    <p>{{ $row->nama_mentor }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
