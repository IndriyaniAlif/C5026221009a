<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index2()
    {
        // mengambil data dari table pegawai
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        // mengirim data pegawai ke view index
        return view('index2', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah2()
    {
        // memanggil view tambah
        return view('tambah2');
    }

    // method untuk insert data ke table pegawai
    public function store2(Request $request)
    {
        // insert data ke table pegawai
        DB::table('keranjangbelanja')->insert([
            'ID' => $request->ID,
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/keranjangbelanja');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('keranjangbelanja')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['ID' => $keranjangbelanja]);
    }



    // method untuk hapus data pegawai
    public function hapus2($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/keranjangbelanja');
    }

}
