<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    // Menampilkan seluruh data keranjang belanja
    public function index()
    {
        $keranjang = DB::table('keranjang')->paginate(10);
        return view('index4', ['keranjang' => $keranjang]);
    }

    // Menampilkan halaman tambah data
    public function create()
    {
        return view('tambahdata');
    }

    // Menyimpan data keranjang belanja
    public function store(Request $request)
    {
        // Validasi apakah kode_barang sudah ada
        $request->validate([
            'kode_barang' => 'required|integer|unique:keranjang,kode_barang',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer',
        ], [
            'kode_barang.unique' => 'Kode barang sudah ada. Pilih kode barang lain.',
        ]);

        // Menyimpan data ke tabel keranjangbelanja
        DB::table('keranjang')->insert([
            'kode_pembelian' => $request->kode_pembelian, // Menambahkan kolom kode_pembelian
            'kode_barang' => $request->kode_barang,
            'Total_Jumlah_x_Harga' => $request->jumlah,
            'Harga_per_item' => $request->harga,
        ]);

        return redirect('/keranjang');
    }

    // Menghapus data keranjang belanja
    public function destroy($id)
    {
        DB::table('keranjang')->where('id', $id)->delete();
        return redirect('/keranjang');
    }

    // Mencari data berdasarkan kode_barang
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $keranjang = DB::table('keranjang')->where('kode_barang', 'like', "%".$cari."%")->paginate();
        return view('index4', ['keranjang' => $keranjang, 'cari' => $cari]);
    }
}
