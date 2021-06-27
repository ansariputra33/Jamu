<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageProfiles extends Model
{
    use HasFactory;
    
    protected $table = 'village_profiles';
    public $timestamps = true;

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar'
    ];
}
