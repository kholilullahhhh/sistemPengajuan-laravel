<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    // protected $primaryKey  = 'id_tanggapan';

    protected $fillable = [
        'id_keluhan',
        'tanggapan',
        'tgl_tanggapan',
    ];

    public function keluhan() {
        return $this->hasOne(Keluhan::class, 'id', 'id_keluhan');
    }
}
