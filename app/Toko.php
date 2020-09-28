<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;

class Toko extends Model
{
    //
    protected $fillable = ['id','nama_toko','alamat_toko','tlp_toko','pemilik_toko'];
    public function Barangs()
    {
        return $this->hasMany(Barang::class, 'id_toko', 'nama_toko','alamat_toko','tlp_toko','pemilik_toko');
    }
}
