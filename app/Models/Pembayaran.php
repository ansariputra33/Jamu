<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
 //   use HasFactory;

    protected $table = 'pembayaran';

    //protected $timestamps = True;

    protected $guarded = [];

    public function pesanan_data()
    {
        return $this->belongsTo('\App\Models\Pesanan','id_pesanan');
    }

    // app/User.php

   public function routeNotificationForWhatsApp()
   {
     return $this->hp_pemesan;
   }
}
