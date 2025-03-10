<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ijazah extends Model
{
    /** @use HasFactory<\Database\Factories\IjazahFactory> */
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'file_ijazah',
        'tahun_kelulusan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
