<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
 //   use HasFactory;

    protected $table = 'pesanan';

    //protected $timestamps = True;

    protected $guarded = [];

    public function produk_data()
    {
        return $this->belongsTo('\App\Models\Products','produk');
    }
}
