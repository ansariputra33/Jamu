<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Products;
use \App\Models\Pesanan;

class IndexController extends Controller
{
    public function halutama()
    {
        $produk = Products::paginate(20);
        return view ('index',compact('produk'));
    }

    public function buat_pesanan($id)
    {
        $result = Products::with(['foto'])->find($id);
        return view("buat_pesanan",['data' => $result]);
    }

    public function store_pesanan(Request $request)
    {
        $result = Pesanan::create([
            'nama_pemesan'   => $request->nama,
            'hp_pemesan'     => $request->hp,
            'alamat_pemesan' => $request->alamat,
            'produk'         => $request->produk,
            'kuantitas'      => $request->kuantitas,
            'status'         => 0
        ]);

        $up_result = Pesanan::find($result->id);
        $up_result->kode = 'OR'.date("dmY").$result->id;
        $up_result->save();
        return $up_result->kode;
        //return view("buat_pesanan",['data' => $result]);
    }
}
