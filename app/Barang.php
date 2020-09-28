<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Toko;

class Barang extends Model
{
    //
    protected $fillable = ['id','id_toko','nama_barang','jenis_barang','jumlah_barang'];
    public function Tokos()
    {
        return $this->belongsTo(Toko::class, 'id', 'id_toko', 'nama_barang','jenis_barang','jumlah_barang');
    }
    
}
