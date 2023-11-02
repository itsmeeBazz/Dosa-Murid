<?php

namespace Database\Seeders;

use App\Models\Pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG001',
            'nama_pelanggaran' => 'Terlambat',
            'poin' => 1700,
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG002',
            'nama_pelanggaran' => 'Tidak membawa Topi',
            'poin' => 10,
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG003',
            'nama_pelanggaran' => 'Tidak membawa Dasi',
            'poin' => 20,
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG999',
            'nama_pelanggaran' => 'Lainnya',
            'poin' => 89,
        ]);
    }
}
