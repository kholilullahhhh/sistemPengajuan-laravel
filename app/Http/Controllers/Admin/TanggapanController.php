<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keluhan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    private $menu;
    public function __construct()
    {
        $this->menu = 'tanggapan';
    }
    public function index()
    {

        $menu = $this->menu;
        $data = Tanggapan::all();
        $keluhan = Keluhan::all();

        return view('pages.admin.tanggapan.index', compact('menu', 'data', 'keluhan'));
    }

    public function store(Request $request)
    {

        $menu = $this->menu;

        $data = Tanggapan::create($request->all());

        return response()->json(['data' => $data, 'success' => true]);

        // return redirect()->route('tanggapan.index');
    }

    // public function store(Request $request)
    // {

    //     $menu = $this->menu;
    //     $data = $request->all();
    //     $file = $request->file('bukti_tanggapan');

    //     // dd($file->getSize() / 1024);
    //     // if ($file->getSize() / 1024 >= 512) {
    //     //     return redirect()->route('agenda.create')->with('message', 'size gambar');
    //     // }

    //     $foto = $request->file('bukti_tanggapan');
    //     $ext = $foto->getClientOriginalExtension();
    //     // $r['pas_foto'] = $request->file('pas_foto');

    //     $nameFoto = date('Y-m-d_H-i-s_') . "." . $ext;
    //     $destinationPath = public_path('upload/tanggapan');

    //     $foto->move($destinationPath, $nameFoto);

    //     $fileUrl = asset('upload/tanggapan/' . $nameFoto);
    //     // dd($destinationPath);
    //     $data['bukti_tanggapan'] = $nameFoto;
    //     // dd($data['bukti_tanggapan']);

    //     Tanggapan::create($data);


    //     // return redirect()->route('keluhan.index');
    //     return response()->json([
    //         'data' => $data,
    //         'success' => true
    //     ]);
    // }

    public function edit(Request $request)
    {

        $menu = $this->menu;
        $data = Tanggapan::find($request->id);

        return response()->json([
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {

        $menu = $this->menu;
        $req = $request->all();
        // dd($request->all());
        $data = Tanggapan::find($request->id);
        $data->update($req);


        return response()->json([
            'data' => $data,
            'success' => true
        ]);
    }

    public function delete($id)
    {
        $user = Tanggapan::findOrFail($id);
        $user->delete();
        return response()->json(['status' => 'success', 'message' => 'tanggapan delete']);
    }


}
