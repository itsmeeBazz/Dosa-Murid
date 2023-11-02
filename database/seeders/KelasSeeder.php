<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            "kode_kelas" => "PPLG123",
            "nama_kelas" => "X PPLG 1",
            "kode_jurusan" => "PPLG",
        ]);
        Kelas::create([
            "kode_kelas" => "AKL423",
            "nama_kelas" => "X AKL 1",
            "kode_jurusan" => "AKL",
        ]);
        Kelas::create([
            "kode_kelas" => "PPLG073",
            "nama_kelas" => "XI PPLG 2",
            "kode_jurusan" => "PPLG",
        ]);
    }
}
