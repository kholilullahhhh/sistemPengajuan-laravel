<?php

namespace Database\Seeders;

use App\Models\KategoriKeluhan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriKeluhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = [
            'Pelayanan Publik',
            'Infrastruktur',
            'Lingkungan',
            'Keamanan',
            'Transportasi',
            'Kesehatan',
            'Pendidikan',
            'Sosial',
            'Lainnya',
        ];

        foreach ($nama as $key => $v) {
            KategoriKeluhan::create([
                'nama_kategori' => $v
            ]);
        }
    }
}
