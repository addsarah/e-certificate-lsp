<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_peserta',
        'deskripsi',
        'nama_ceo',
        'nama_mentor',
        'nama_instansi',
        'tempat',
        'tanggal',
        'gambar_ttdceo',
        'gambar_ttdmentor'
    ];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }

    
}
