<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AnggotaRumahTangga;
use App\Models\KategoriKeluhan;
use App\Models\Keluhan;
use App\Models\KepalaRumah;
use App\Models\KetAset;
use App\Models\KetPerumahan;
use App\Models\Pelanggan;
use App\Models\PenerimaPKH;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Penerima extends Controller
{
    private $menu;
    public function __construct($menu = 'permintaan')
    {
        $this->menu = $menu;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = $this->menu;
        $kategori = KategoriKeluhan::all();
        return view('pages.user.permintaan', compact('menu', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $r = $request->all();

        // Handling foto_bukti_keluhan upload
        $fotoKeluhan = $request->file('foto_bukti_keluhan');
        if ($fotoKeluhan) {
            $extKeluhan = $fotoKeluhan->getClientOriginalExtension();
            $nameFotoKeluhan = date('Y-m-d_H-i-s_') . "keluhan." . $extKeluhan;
            $destinationPathKeluhan = public_path('upload/bukti');
            $fotoKeluhan->move($destinationPathKeluhan, $nameFotoKeluhan);
            $fileUrlKeluhan = asset('upload/bukti/' . $nameFotoKeluhan);
            $r['foto_bukti_keluhan'] = $nameFotoKeluhan;
        }

        // Handling foto_bukti_pelanggan upload
        $fotoPelanggan = $request->file('foto_bukti_pelanggan');
        if ($fotoPelanggan) {
            $extPelanggan = $fotoPelanggan->getClientOriginalExtension();
            $nameFotoPelanggan = date('Y-m-d_H-i-s_') . "pelanggan." . $extPelanggan;
            $destinationPathPelanggan = public_path('upload/pelanggan');
            $fotoPelanggan->move($destinationPathPelanggan, $nameFotoPelanggan);
            $fileUrlPelanggan = asset('upload/pelanggan/' . $nameFotoPelanggan);
            $r['foto_bukti_pelanggan'] = $nameFotoPelanggan;
        }

        // Store the rest of the data
        $r['tgl_terdaftar'] = Carbon::now();
        Pelanggan::create($r);

        $getPelanggan = Pelanggan::latest()->first();
        $r['id_pelanggan'] = $getPelanggan->id;
        $r['tgl_keluhan'] = Carbon::now();
        $r['status_keluhan'] = 'Diproses';

        Keluhan::create($r);

        return redirect()->route('permintaan.index')->with('message', 'store permintaan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $r)
    {
        $r = $r->all();
        $r['email'] = $r['email'] ?? '';
        // $pelanggan = DB::table('pelanggans')->where('email', $r['email'])->first();
        $pelanggan = Pelanggan::where('email', $r['email'])->first();

        if ($pelanggan) {
            // Query keluhan berdasarkan id pelanggan
            $keluhan = DB::table('keluhans')
                ->join('kategori_keluhans', 'keluhans.id_kategori', '=', 'kategori_keluhans.id')
                ->where('keluhans.id_pelanggan', $pelanggan->id)
                ->select('keluhans.*', 'kategori_keluhans.nama_kategori') // Menambahkan nama_kategori dari tabel kategori
                ->get();

            // Query tanggapan berdasarkan id keluhan
            $tanggapan = [];
            foreach ($keluhan as $k) {
                $tanggapan[] = DB::table('tanggapans')->where('id_keluhan', $k->id)->get();
            }
            // Mempersiapkan data untuk view HTML
            $html = view('pages.user.data_pengajuan', compact('pelanggan', 'keluhan', 'tanggapan'))->render();

            return response()->json(['html' => $html]);
        } else {
            return response()->json(['html' => '<p>No data found</p>']);
        }

        // if ($getkrt) {
        //     $getPenerima = PenerimaPKH::where('kepala_id', $getkrt->id)->first();
        //     $getAset = KetAset::where('kepala_id', $getkrt->id)->first();
        //     $getRumah = KetPerumahan::where('kepala_id', $getkrt->id)->first();
        //     $art = AnggotaRumahTangga::where('kepala_id', $getkrt->id)->get();

        //     $datas = collect([
        //         (object) [
        //             'krt' => $getkrt,
        //             'penerima' => $getPenerima,
        //             'status' => $getAset ? 'S' : 'P'
        //         ]
        //     ]);
        //     // dd($datas);
        //     return response()->json([
        //         'html' => view('pages.user.table_cek', ['datas' => $datas])->render()
        //     ]);
        // } else {
        //     return response()->json([
        //         'html' => '<p>Data tidak ditemukan</p>'
        //     ]);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
