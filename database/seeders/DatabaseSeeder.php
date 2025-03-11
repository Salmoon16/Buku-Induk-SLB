<?php

namespace Database\Seeders;

use App\Models\Absensi;
use App\Models\Ijazah;
use App\Models\Kelas;
use App\Models\Prestasi;
use App\Models\Raport;
use App\Models\Siswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Salman',
            'email' => 'salman16@gmail.com',
        ]);

        $dataUser = User::factory(10)->create();
        $dataSiswa = Siswa::factory(10)->create();
        $dataKelas = Kelas::factory(10)->create();
        $dataRaport = Raport::factory(10)->create();
        $dataPrestasi = Prestasi::factory(10)->create();
        $dataIjazah = Ijazah::factory(10)->create();
        $dataAbsensi = Absensi::factory(10)->create();

        foreach ($dataSiswa as $data) {
            $data->update([
                'kelas_id' => Kelas::all()->random()->id,
            ]);
        }

        foreach ($dataRaport as $data) {
            $data->update([
                'siswa_id' => Siswa::all()->random()->id,
            ]);
        }

        foreach ($dataPrestasi as $data) {
            $data->update([
                'siswa_id' => Siswa::all()->random()->id,
            ]);
        }

        foreach ($dataIjazah as $data) {
            $data->update([
                'siswa_id' => Siswa::all()->random()->id,
            ]);
        }

        foreach ($dataAbsensi as $data) {
            $data->update([
                'siswa_id' => Siswa::all()->random()->id,
            ]);
        }

    }
}
