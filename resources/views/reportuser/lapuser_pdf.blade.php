<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <style>
        /* Tambahkan gaya CSS untuk background dan orientasi */
        body {
            background: url('{{ public_path('images/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff;
            text-align: center;
        }

        .sertifikat-container {
            max-width: 1754px; /* Sesuaikan dengan lebar gambar background */
            max-height: 1241px; /* Sesuaikan dengan tinggi gambar background */
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        /* Tambahkan gaya sesuai dengan desain grafis lainnya */
    </style>
</head>
<body>
    <div class="sertifikat-container">
        <!-- Isi desain grafis sertifikat -->
        <img src="{{ public_path('images/logo.png') }}" alt="Logo" style="max-width: 100px;">
        @foreach($R_user as $row)
        <h1 style="color: #0066cc;">Sertifikat</h1>
        <p style="font-size: 18px;">Nama Penerima: {{ $row->name }}</p>
        <p style="font-size: 18px;">Nomor Sertifikat: {{ $row->email }}</p>
        @endforeach
        <!-- Tambahkan elemen-elemen lain sesuai kebutuhan -->
    </div>
</body>
</html>