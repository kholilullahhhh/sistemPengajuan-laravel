<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriKeluhan;
use App\Models\Keluhan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    private $menu;
    public function __construct()
    {
        $this->menu = 'keluhan';
    }
    public function index()
    {

        $menu = $this->menu;
        $data = Keluhan::all();
        $kategori = KategoriKeluhan::all();
        $pelanggan = Pelanggan::all();

        return view('pages.admin.keluhan.index', compact('menu', 'data', 'kategori', 'pelanggan'));
    }

    public function store(Request $request)
    {

        $menu = $this->menu;
        $data = Keluhan::create($request->all());

        // return redirect()->route('keluhan.index');
        return response()->json([
            'data' => $data,
            'success' => true
        ]);
    }

    public function edit(Request $request)
    {

        $menu = $this->menu;
        $data = Keluhan::find($request->id);

        return response()->json([
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {

        $menu = $this->menu;
        $req = $request->all();
        // dd($request->all());
        $data = Keluhan::find($request->id);
        $data->update($req);


        return response()->json([
            'data' => $data,
            'success' => true
        ]);
    }

    public function delete($id)
    {
        $user = Keluhan::findOrFail($id);
        $user->delete();
        return response()->json(['status' => 'success', 'message' => 'keluhan delete']);
    }
}
