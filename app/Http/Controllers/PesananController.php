<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pesanan;
use \App\Models\Products;
use \App\Models\Pembayaran;
use GuzzleHttp;

class PesananController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data = Pesanan::with(['produk_data'])->get();
        return view('admin.pesanan',compact('data'));
    }

    public function test()
    {
        $data = json_encode([
          "token"=>"d8e261f4fe47bc026e78d447f9dfb77a",
          "source"=>6285242218273,
          "destination"=>6285251748953,
          "type">"text",
          "body"=>[
              "text"=>"Hello Word"
          ]
        ]);

        //return $data;
        $client = new GuzzleHttp\Client();
        $response = $client->request('POST','http://waping.es/api/send',
            ['headers' =>['Content-Type' => 'application/json'],
            'json' => $data
        ]);
        return response()->json([
            'status_code'=> $response->getStatusCode(),
            'body'       => $response->getBody()
        ]);
        return $response->getStatusCode();
    }

    public function cek()
    {
        $data = Pesanan::with(['produk_data'])->get();
        return view('pesanan',compact('data'));
    }

    public function cari(Request $request)
    {
        if ($request->tipe == 1) {
            $pesanan = Pesanan::with(['produk_data'])->where('kode',$request->nilai)->first();
            if ($pesanan == null) {
                return 'Hasil Tidak Ditemukan, Silahkan Cari Menggunakan Tipe atau Nomor Lain';
            }
            return view('admin.detail_pesanan',compact('pesanan'));
        }elseif($request->tipe == 2) {
            $pesanan = Pesanan::with(['produk_data'])->where('nama_pemesan',$request->nilai)->first();
            if ($pesanan == null) {
                return 'Hasil Tidak Ditemukan, Silahkan Cari Menggunakan Tipe atau Nama Lain';
            }
            return view('admin.detail_pesanan',compact('pesanan'));
        }elseif($request->tipe == 3) {
            $pesanan = Pesanan::with(['produk_data'])->where('hp_pemesan',$request->nilai)->first();
            if ($pesanan == null) {
                return 'Hasil Tidak Ditemukan, Silahkan Cari Menggunakan Tipe atau Nomor Hp Lain';
            }
            return view('admin.detail_pesanan',compact('pesanan'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $pesanan = Pesanan::with(['produk_data','pembayaran_data'])->find($id);
        return view('admin.detail_pesanan',compact('pesanan'));
        // $pesanan->status = 1;
        // $pesanan->save();

        // $produk = Products::find($pesanan->produk);
        // $produk->stok = $produk->stok - $pesanan->kuantitas;
        // $produk->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terima($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->status = 1;
        $pesanan->save();

        $produk = Products::find($pesanan->produk);
        $produk->stok = $produk->stok - $pesanan->kuantitas;
        $produk->save();
    }

    public function tolak($id)
    {
        $pesanan = Pesanan::with(['pembayaran_data'])->find($id);
        $pesanan->status = 4;
        $pesanan->save();

        if ($pesanan) {
            Pembayaran::where('id_pesanan',$id)->delete();
        }

    }

    public function selesai($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->status = 5;
        $pesanan->save();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function batal($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->status = 6;
        $pesanan->save();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bayar(Request $request)
    {
        $result = Pembayaran::create([
            'id_pesanan' => $request->id_pesanan,
            'bukti'      => ''
        ]); 

        if ($files = $request->file('bukti')) {
            $path = public_path() . '/bukti_bayar/';
            $files->move($path,'bukti_bayar_'.$result->id.'.'.$files->getClientOriginalExtension());
            
            $up_result = Pembayaran::find($result->id);
            $up_result->bukti = 'bukti_bayar_'.$result->id.'.'.$request->bukti->getClientOriginalExtension();
            $up_result->save();

            $pesanan = Pesanan::find($request->id_pesanan);
            $pesanan->status = 3;
            $pesanan->save();           
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
