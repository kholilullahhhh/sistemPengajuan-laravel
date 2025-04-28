<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluhanKategori extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_keluhan';
    protected $fillable = [
        'id_kategori'
    ];

}
