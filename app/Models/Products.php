<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
 //   use HasFactory;

    protected $table = 'produk';

    //protected $timestamps = True;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
        'stok'
    ];

    public function foto()
    {
        return $this->hasMany('\App\Models\FotoProduk','id_produk');
    }
}
