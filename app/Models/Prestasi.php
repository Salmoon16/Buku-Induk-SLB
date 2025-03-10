<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestasi extends Model
{
    /** @use HasFactory<\Database\Factories\PrestasiFactory> */
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'nama_prestasi',
        'tingkat_prestasi',
        'tahun_prestasi',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
