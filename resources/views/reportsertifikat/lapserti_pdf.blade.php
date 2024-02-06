@foreach ($R_sertifikat as $row)
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

            .row-info {
                margin-bottom: 20px;
            }

            .ttd-container {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }

            .ttd-ceo,
            .ttd-mentor {
                width: 48%;
                text-align: center;
            }

            .ttd-ceo img,
            .ttd-mentor img {
                width: 50px;
                margin-top: 10px;
                border-radius: 50%; /* Make the images circular */
            }

            .ttd-ceo p,
            .ttd-mentor p {
                margin-top: 5px;
                font-size: 14px; /* Adjust as needed */
            }
        </style>
    </head>

    <body>
        <div class="sertifikat-container">
            <h1 class="header">Sertifikat</h1>
            <p class="info">{{ $row->peserta->no_serti }}</p>
            <p class="info">Diberikan Kepada</p>
            <p class="info">{{ $row->peserta->nama_peserta }}</p>
            <p class="info">Atas Kelulusannya pada Kelas Pelatihan "{{ $row->peserta->tema_pel }}"</p>
            <p class="info">{{ $row->deskripsi }}</p>
            <div class="row-info">
                <p class="info">Yang diselenggarakan oleh {{ $row->nama_instansi }}</p>
                <p class="info">{{ $row->tempat }}, {{ strftime('%d %B %Y', strtotime($row->tanggal)) }}</p>
            </div>

            <!-- Signatures Container -->
            <div class="ttd-container">
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
        </div>
    </body>

    </html>
@endforeach
