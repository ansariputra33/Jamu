<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Products;
use App\Models\FotoProduk;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $total = DB::table('produk')->count(); 
        //$data = DB::table('produk')->paginate(15);
        $data = Products::all();
        //fmod(20, 4)

        return view("admin.produk",['data' => $data,'total' => $total]);
    }

    public function list_fetch($start)
    {
        $total = DB::table('produk')->count(); 
        $data = DB::table('produk')->skip($start)->take(15)->get();
        
        return view("admin.produk_data",['data' => $data,'total' => $total]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('produk')->paginate(3); 
        return view("admin.dataProduk",['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.tambahProduk");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->gambar != null ) {
        //     $gambar = $request->gambar->getClientOriginalName();
        // }else{
        //     $gambar = '';
        // } 
        //$request->gambar[0]->getClientOriginalExtension(); 
        $result = Products::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => ''
        ]);

        if ($result) {
            if ($request->gambar != null ) {
                if ($files = $request->file('gambar')) {
                    foreach ($request->gambar as $key => $value) {
                        $foto = FotoProduk::create([
                            'id_produk' => $result->id,
                            'nama'      => $result->id.'_'.$key.'.'.$value->getClientOriginalExtension()
                        ]);

                        $path = public_path() . '/foto_produk/';
                    

                        $value->move($path,$result->id.'_'.$key.'.'.$value->getClientOriginalExtension());   
                    }
                  $up_result = Products::find($result->id);
                  $up_result->gambar = $result->id.'_'.$key.'.'.$request->gambar[0]->getClientOriginalExtension();
                  $up_result->save();         
                }
            }

        }

        
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
        $result = Products::with(['foto'])->find($id);
        return view("admin.produk_edit",['data' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $result = Products::find($request->id);
        $result->nama = $request->nama;
        $result->harga = $request->harga;
        $result->stok = $request->stok;
        $result->deskripsi = $request->deskripsi;
        $result->save();

        if ($result) {
            if ($request->gambar != null ) {
                if ($files = $request->file('gambar')) {
                    foreach ($request->gambar as $key => $value) {
                        $foto = FotoProduk::create([
                            'id_produk' => $result->id,
                            'nama'      => $result->id.'_'.$key.'.'.$value->getClientOriginalExtension()
                        ]);

                        $path = public_path() . '/foto_produk/';
                        $value->move($path,$result->id.'_'.$key.'.'.$value->getClientOriginalExtension());   
                    }       
                }
            }   
        }
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $result = Products::find($id)->delete();
    }
}
