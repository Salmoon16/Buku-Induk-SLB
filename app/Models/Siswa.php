<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Ijazah;
use App\Models\Raport;
use App\Models\Absensi;
use App\Models\Prestasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'tanggal_lahir',
        'alamat',
        'parents',
        'contact_parents',
        'foto',
        'kelas_id',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function rekapAbsensi()
    {
        return $this->hasMany(Absensi::class);
    }

    public function raport()
    {
        return $this->hasOne(Raport::class);
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }

    public function ijazah()
    {
        return $this->hasOne(Ijazah::class);
    }
}
