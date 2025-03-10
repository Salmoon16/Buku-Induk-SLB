<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Raport extends Model
{
    /** @use HasFactory<\Database\Factories\RaportFactory> */
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'semester',
        'mata_pelajaran',
        'nilai',
        'keterangan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
