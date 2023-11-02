<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruBK extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_bk',
        'nama',
        'nip',
        'alamat',
        'no_telpon',
    ];

    public function aksi()
    {
        return $this->hasMany(Aksi::class, 'kode_bk', 'kode_bk');
    }
}
