<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Pesanan;
use App\Models\InfoDesa;

class AdminController extends Controller
{
    public function auth(Request $request)
    {
        $auth = Admin::where('email',$request->email)
                ->where('password',$request->password)
                ->get();
        if (count($auth) > 0) {
            //return 'ada';
             $request->session()->put('admin',true);
             return redirect('/admin');
         }else{
            //return 'tidak';
            return redirect('/login');
         }     
        
    }

    public function index(Request $request)
    {
        $data = [];
        $data['new_o'] = Pesanan::where('status',0)->get()->count();
        $data['konf_o'] = Pesanan::where('status',1)->get()->count();
        $data['ok_o'] = Pesanan::where('status',2)->get()->count();
        $data['canc_o'] = Pesanan::where('status',3)->get()->count();

        return view('admin.index',compact('data'));     
        
    }

    public function dashboard()
    {
        $data = [];
        $data['new_o'] = Pesanan::where('status',0)->get()->count();
        $data['konf_o'] = Pesanan::where('status',1)->get()->count();
        $data['ok_o'] = Pesanan::where('status',2)->get()->count();
        $data['canc_o'] = Pesanan::where('status',3)->get()->count();

        return view('admin.dashboard',compact('data'));     
        
    }

    public function profil()
    {
        $data = InfoDesa::all();
        return view('admin.info_desa',compact('data'));     
        
    }

    public function infoAdd(Request $request)
    {
        $result = InfoDesa::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        if ($result) {
            if ($request->gambar_desa != null ) {
                if ($files = $request->file('gambar_desa')) {
                    $path = public_path() . '/foto_desa/';
                    $files->move($path,$result->id.'.'.$files->getClientOriginalExtension());
                    
                    $up_result = InfoDesa::find($result->id);
                    $up_result->gambar = $result->id.'.'.
                    $request->gambar_desa->getClientOriginalExtension();
                    $up_result->save();      
                }
            }   
        }       
    }

    public function editInfo($id)
    {
        $data = InfoDesa::find($id);
        return view('admin.edit_info_desa',compact('data'));     
        
    }

    public function profilUpdate(Request $request)
    {
        $result = InfoDesa::find(1);
        $result->judul = $request->judul;
        $result->deskripsi = $request->deskripsi;
        $result->save();

        if ($result) {
            if ($request->gambar_desa != null ) {
                if ($files = $request->file('gambar_desa')) {
                    $path = public_path() . '/foto_desa/';
                    $files->move($path,$result->id.'.'.$files->getClientOriginalExtension());
                    
                    $up_result = InfoDesa::find($result->id);
                    $up_result->gambar = $result->id.'.'.
                    $request->gambar_desa->getClientOriginalExtension();
                    $up_result->save();      
                }
            }   
        }       
    }

    public function deleteInfo($id)
    {
        $data = InfoDesa::find($id)->delete();
        //return view('admin.edit_info_desa',compact('data'));     
        
    }

    public function profilDes()
    {
        $village = VillageProfiles::latest()->paginate(5);

        return view('admin.profilDesa', compact('admin'))
            ->with('i',(request()->input('page', 1) -1) *5); 
        
    }

     public function tambprof(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);
        VillageProfiles::create($request->all());
        return view('admin.tambahProfil');
    }

        public function ubProfil(VillageProfiles $village)
    {
        return view('admin.ubahProfil');
    }

    public function dataPro()
    {
        $product = Products::lates()->paginate(5);

        return view('admin.dataProduk', compact('admin'))
        ->with('i', (request()->input('page', 1) -1) *5);
    }
    
    public function tambPro(Request $request)
    {
        $request->validate([
            'nama produk' => 'required',
            'deskripsi produk' =>'required',
            'harga' => 'required',
            'gambar' =>'required',
            'stok' => 'required'
        ]);
        Products::create($request->all());
        return redirect()->route('admin.tambahProduk');
    }
   



    public function ubProd(Products $product)
    {
        return view('admin.ubahProduk');
    }


}
