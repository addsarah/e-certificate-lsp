<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
}
