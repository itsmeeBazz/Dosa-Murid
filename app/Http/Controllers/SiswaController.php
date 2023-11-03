<?php

namespace App\Http\Controllers;

use App\Models\GuruBK;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\Cari;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa');
    }

    public function result(Request $request)
    {
        $nis = $request->nis;
        $siswa = Siswa::where('nis', $nis)->with('kelas.jurusan')->first();
        $guruBK = GuruBK::all();
        return view('result', compact('nis', 'siswa', 'guruBK'));
    }

    public function riwayat(Request $request)
    {
        $nis = $request->nis;
        $pelanggaran = Pelanggaran::all();
        $siswa = Siswa::where('nis', $nis)->with('kelas.jurusan')->first();
        $guruBK = GuruBK::all();
        return view('riwayat', compact('nis',  'siswa', 'guruBK', 'pelanggaran'));
    }
    public function cari(Request $request)
    {
        $nis = $request->nis;
        $pelanggaran = Pelanggaran::all();
        $siswa = Siswa::where('nis', $nis)->with('kelas.jurusan')->first();
        $guruBK = GuruBK::all();
        return view('cari', compact('nis',  'siswa', 'guruBK', 'pelanggaran'));
    }
}
