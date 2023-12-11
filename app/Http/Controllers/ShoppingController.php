<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingController extends Controller
{
    public function indexshopping()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $shoppingchart = DB::table('shoppingchart')->paginate(15);
        // mengirim data pegawai ke view index
        return view('indexshopping', ['shoppingchart' => $shoppingchart]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahshopping()
    {
        // memanggil view tambah
        return view('tambahshopping');
    }

    // method untuk insert data ke table pegawai
    public function storeshopping(Request $request)
    {
        // insert data ke table pegawai
        DB::table('shoppingchart')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/shoppingchart');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');

    }

    // method untuk hapus data pegawai
    public function hapusshopping($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('shoppingchart')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/shoppingchart');
    }

    // method untuk mencari data pegawai
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai, 'cari' => $cari]);
    }

    public function view($id)
    {
       // mengambil data pegawai berdasarkan id yang dipilih
       $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
       // passing data pegawai yang didapat ke view edit.blade.php
       return view('lihattt', ['pegawai' => $pegawai]);
    }
}
