<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama_peserta',
        'no_serti',
        'tema_pel'
    ];

    public function sertifikat()
    {
        return $this->hasMany(Sertifikat::class);
    }
}
