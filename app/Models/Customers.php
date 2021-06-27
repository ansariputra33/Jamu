<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    
    protected $timestamps = True;

    protected $fillable = [
        'nama',
        'no_telp',
        'alamat'
    ];
}
