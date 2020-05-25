<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    //
    public function BuatToko(Request $request)
    {
        $Toko = Toko::create([
            'nama_toko' => $request->nama_toko,
            'alamat_toko' => $request->alamat_toko,
            'tlp_toko' => $request->tlp_toko,
            'pemilik_toko' => $request->pemilik_toko,
            'edit' => $request->edit,
            'Lihat' => $request->tambah,
            'hapus' => $request->hapus,
        
        
        ]);
       

        return redirect(route('tampil.toko'));
    }

    public function FormBuatToko()
    {
        return view('BuatToko');
    }

    public function TampilToko()
    {
        $BanyakToko = Toko::all();

        return view('TokoHungkul', compact('BanyakToko'));
    }
    public function edit($id)
    {
	$SatuToko = Toko::find($id);
	return view('TokoEdit', compact('SatuToko'));
                    
 
    }
    public function update(Request $request)
    {
    Toko::where('id',$request->id)->update([
		'nama_toko' => $request->nama_toko,
        'alamat_toko' => $request->alamat_toko,
        'tlp_toko' => $request->tlp_toko,
        'pemilik_toko' => $request->pemilik_toko,
	]);
	return redirect(route('tampil.toko'));
    }
    public function Tambah($id)
    {
	     Toko::find($id);
	     return redirect(route('TambahBarang'));
                    
 
    }
    public function hapus($id)
    {
        Toko::find($id)->delete();
    
        return redirect(route('tampil.toko'));
    }

}
