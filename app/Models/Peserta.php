<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama_peserta',
        'no_serti',
        'tema_pel'
    ];

    public function sertifikat():HasOne
    {
        return $this->hasOne(Sertifikat::class, 'id_peserta');
    }
}
