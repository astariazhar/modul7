<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model Barang
use App\Models\BarangModel;

class barangController extends Controller
{
    //method untuk tampil data barang
    public function barangtampil()
    {
        $databarang = barangModel::orderby('kode_barang', 'ASC')
        ->paginate(5);

        return view('halaman/view_barang',['barang'=>$databarang]);
    }

    //method untuk input data barang
    public function baranginput(Request $request)
    {
        $this->validate($request, [
            'kode_barang' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        barangModel::create([
            'kode_barang' => $request->kode_barang,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/barang');
    }

     //method untuk hapus data barang
     public function baranghapus($id_barang)
     {
         $databarang=barangModel::find($id_barang);
         $databarang->delete();
 
         return redirect()->back();
     }

     //method untuk edit data barang
    public function barangedit($id_barang, Request $request)
    {
        $this->validate($request, [
            'kode_barang' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        $id_barang = barangModel::find($id_barang);
        $id_barang->kode_barang   = $request->kode_barang;
        $id_barang->nama      = $request->nama;
        $id_barang->harga  = $request->harga;
        $id_barang->deskripsi   = $request->deskripsi;

        $id_barang->save();

        return redirect()->back();
    }
}