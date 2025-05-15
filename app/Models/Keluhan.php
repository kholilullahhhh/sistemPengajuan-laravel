<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id_keluhan';

    protected $fillable = [
        'id_pelanggan',
        'id_kategori',
        'keluhan',
        'foto_bukti_keluhan',
        'tgl_keluhan',
        'status_keluhan',
    ];

    public function pelanggan() {
        return $this->hasOne(Pelanggan::class, 'id', 'id_pelanggan');
    }

    public function kategori() {
        return $this->hasOne(KategoriKeluhan::class, 'id', 'id_kategori');
    }
}
