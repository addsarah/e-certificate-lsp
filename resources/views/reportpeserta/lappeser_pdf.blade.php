<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Data peserta</title>
</head>
<body>
  <h3 >Report Data Peserta</h3>
</hr>
<table style="width:100%; border-collapse: collapse; border: 1px solid black;">
    <thead>
        <tr>
            <th bgcolor="cyan" width="5%" style="border: 1px solid black;">No</td>
            <th bgcolor="cyan" style="border: 1px solid black;">Nama Peserta</td>
            <th bgcolor="cyan" style="border: 1px solid black;">Nomor Sertifikat</td>
            <th bgcolor="cyan" style="border: 1px solid black;">Tema Pelatihan</td>
            <th bgcolor="cyan" style="border: 1px solid black;">Tanggal</td>
        </tr>
    </thead>
<tbody>
    @foreach($R_peserta as $row)
    <tr>
        <td style="border: 1px solid black;">{{$loop->iteration}}</td>
        <td style="border: 1px solid black;">{{$row->nama_peserta}}</td>
        <td style="border: 1px solid black;">{{$row->no_serti}}</td>
        <td style="border: 1px solid black;">
            @switch($row->tema_pel)
            @case('digi-enterpre')
            Digital Enterpreneurship Academy
            @break
            @case('pro')
            Profesional Academy
            @break
            @case('voc-gra')
            Vocational School Graduate Academy
            @break
            @case('fre-gra')
            Fresh Graduate Academy
            @break
            @default
            {{ $row->nama_pel }}
            @endswitch
        </td>
        <td style="border: 1px solid black;">{{$row->created_at->diffForHumans()}}</td>
    </tr>
    @endforeach
</tbody>
</table>
<p align="right">
Date : {{$row->created_at}} </br>
Personal In Charge</br>

@if(Auth::check())
<span class="hidden-xs" fontsize= 15 >{{ Auth::user()->level}}</span>
@endif</br>
</br>

</br>
</br>
 @if(Auth::check())
<span class="hidden-xs">({{ Auth::user()->name}})</span>
@endif
</body>
</html>