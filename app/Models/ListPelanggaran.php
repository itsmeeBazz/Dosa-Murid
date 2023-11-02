<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPelanggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pelanggaran',
        'kode_aksi',
        'keterangan',
    ];

    public function aksi()
    {
        return $this->belongsTo(Aksi::class, 'kode_aksi', 'kode_aksi');
    }

    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class, 'kode_pelanggaran', 'kode_pelanggaran');
    }
}
