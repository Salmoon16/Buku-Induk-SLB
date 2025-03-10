<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;

    protected $fillable = [
        'wali_kelas',
        'tingkat',
        'kategori'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
