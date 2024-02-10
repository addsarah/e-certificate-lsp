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
            margin: 50px auto;
            border: 2px solid rgb(32, 136, 255);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            max-width: 600px; /* Adjust as needed */
            height: 800px;
        }

        .header {
            color: #0c27be;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .info {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .ttd-ceo,
        .ttd-mentor {
            position: absolute;
            bottom: 20px;
            width: 50%;
        }

        .ttd-ceo img,
        .ttd-mentor img {
            width: 100px;
            height: 100px;
            margin-top: 10px;
            border-radius: 10%; /* Make the images circular */
        }

        .ttd-ceo p,
        .ttd-mentor p {
            margin-top: 5px;
            font-size: 32px; /* Adjust as needed */
        }

        .ttd-ceo {
            left: 50px;
            text-align: left;
        }

        .ttd-mentor {
            right: 50px;
            text-align: right;
        }
    </style>
</head>

<body>
    @foreach ($R_sertifikat as $row)
        <div class="sertifikat-container">
            <h1 class="header">Sertifikat</h1>
            <p class="info">{{ $row->peserta->no_serti }}</p>
            <p class="info">Diberikan Kepada</p>
            <p class="info">{{ $row->peserta->nama_peserta }}</p>
            <p class="info">Atas Kelulusannya pada Kelas Pelatihan "{{ $row->peserta->tema_pel }}"</p>
            <p class="info">{{ $row->deskripsi }}</p>
            <p class="info">Yang diselenggarakan oleh {{ $row->nama_instansi }}</p>
            <p class="info">{{ $row->tempat }}, {{ strftime('%d %B %Y', strtotime($row->tanggal)) }}</p>

            <!-- CEO Signature and Name -->
            <div class="ttd-ceo">
                <img src="{{ public_path('uploads/' . $row->gambar_ttdceo) }}" alt="Tanda Tangan CEO">
                <p>{{ $row->nama_ceo }}</p>
            </div>

            <!-- Mentor Signature and Name -->
            <div class="ttd-mentor">
                <img src="{{ public_path('uploads/' . $row->gambar_ttdmentor) }}" alt="Tanda Tangan Mentor">
                <p>{{ $row->nama_mentor }}</p>
            </div>
        </div>
    @endforeach
</body>

</html>