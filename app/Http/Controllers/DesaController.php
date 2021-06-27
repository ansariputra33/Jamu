<?php

namespace App\Http\Controllers;

use App\Models\desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return desa::all();
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, desa $desa)
    {
        //
        $result = desa::create([
            'Judul' => $request->Judul,
            'Gambar' => $request->Gambar,
            'Deskripsi' => $request->Deskripsi
        ]);
        
        $response = [
            'Message' => 'Data success created',
            'Status' => 'Ok',
            'Data' => $result
        ];

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(desa $desa)
    {
        //
        return $desa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit(desa $desa)
    {
        //
        return $desa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, desa $desa)
    {
        //
        $result = $desa->update([
            'Judul' => $request->Judul,
            'Gambar' => $request->Gambar,
            'Deskripsi' => $request->Deskripsi
        ]);

        $response = [
            'Message' => 'Data success created',
            'Status' => 'Ok',
            'Data' => $result
        ];

        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy(desa $desa)
    {
        //
        $result = $desa->delete();
        
        $response = [
            'Message' => 'Data success deleted',
            'Status' => 'Ok',
            'Data' => $result
        ];

        return $response;
    }

    /**
     * Upload Gambar Profile Desa ke storage
     * @param \Illuminate\Http\Request  $request
     * @return Filename with data type string
     */
    public function upload(Request $request) 
    {
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('image_desa', $filename, 'public');

        return $filename;
    }
}
