<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pesanan;
use \App\Models\Products;
use \App\Models\Pembayaran;
use GuzzleHttp;

class PembayaranController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data = Pembayaran::with(['pesanan_data'])->get();
        return view('admin.pembayaran',compact('data'));
    }

}
