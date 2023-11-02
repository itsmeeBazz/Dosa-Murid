<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_aksi',
        'kode_bk',
        'nis_siswa',
        'tanggal',
        'waktu',
        'kode_bk',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis_siswa', 'nis');
    }

    public function guruBk()
    {
        return $this->belongsTo(GuruBK::class, 'kode_bk', 'kode_bk');
    }

    public function ListPelanggaran()
    {
        return $this->hasMany(ListPelanggaran::class, 'kode_aksi', 'kode_aksi')->with('pelanggaran');
    }
}
