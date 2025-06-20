<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table karyawan
		// $karyawan = DB::table('karyawan')->get();
        $newkaryawan = DB::table('newkaryawan')->paginate(10);
    	// mengirim data pegawai ke view index
		return view('index5',['eas' => $newkaryawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{
        // memanggil view tambah
		return view('tambahnewK');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('newkaryawan')->insert([
			'NIP' => $request->NIP,
			'nama' => $request->nama,
			'pangkat' => $request->pangkat,
			'gaji' => $request->gaji
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/eas');

	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('newkaryawan')->where('NIP',$id)->delete();
        // memanggil view tambah
		// return view('hapus');

		// alihkan halaman ke halaman pegawai
		return redirect('/eas');
	}
}
