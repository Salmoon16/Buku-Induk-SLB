<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    /** @use HasFactory<\Database\Factories\AbsensiFactory> */
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'semester',
        'hadir',
        'sakit',
        'izin',
        'alpha'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
