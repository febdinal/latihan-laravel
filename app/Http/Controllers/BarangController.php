<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function BarangToko(Request $request)
    {
        $BanyakBarang = Barang::all();
        return view('BarangSatuan', compact('BanyakBarang'));
    }
    public function FormBarangToko()
    {
        return view('BarangToko');
    }
    public function TampilBarang()
    {
        $BanyakBarang = Barang::all();

        return view('BarangSatuan', compact('BanyakBarang'));
    }
    public function edit($id)
    {
        $SatuBarang = Barang::find($id);
        return view('BarangEdit', compact('SatuBarang'));
    }
    public function update(Request $request)
{
	Barang::where('id',$request->id)->update([
		'id_toko' => $request->id_toko,
		'nama_barang' => $request->nama_barang,
		'jenis_barang' => $request->jenis_barang,
		'Jumlah_barang' => $request->jumlah_barang
	]);
	return redirect(route('tampil.barang'));
    }

    public function hapus($id)
    {
        Barang::where('id',$id)->delete();
        
        return redirect(route('tampil.barang'));
    }

    public function tambah(Request $request)
    {
        $Barang = Barang::create([
            'id_toko' => $request->id_toko,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'jumlah_barang' => $request->jumlah_barang,        
        ]);
        return redirect()->route('show.tambah.barang', [$request->id_toko]);
    }

    public function BarBaru(Request $request)
    {
        $tambahbarang = Barang::where('id',$request->id)->get();
        return view('BarangBaru', compact('tambahbarang'));
    }

}