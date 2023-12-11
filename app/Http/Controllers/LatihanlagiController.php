<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatihanlagiController extends Controller
{
    public function indexlatihanlagi()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $latihanlagi = DB::table('latihanlagi')->paginate(15);
        // mengirim data pegawai ke view index
        return view('indexlatihanlagi', ['latihanlagi' => $latihanlagi]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahlatihanlagi()
    {
        // memanggil view tambah
        return view('tambahlatihanlagi');
    }

    // method untuk insert data ke table pegawai
    public function storelatihanlagi(Request $request)
    {
        // insert data ke table pegawai
        DB::table('latihanlagi')->insert([
            'id' => $request->id,
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangkaa' => $request->nilaiangkaa,
            'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/latihanlagi');

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
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk mencari data pegawai
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $latihanlagi = DB::table('latihanlagi')
            ->where('normorinduksiswa', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('indexlatihanlagi', ['latihanlagi' => $latihanlagi, 'cari' => $cari]);
    }

    public function view($id)
    {
       // mengambil data pegawai berdasarkan id yang dipilih
       $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
       // passing data pegawai yang didapat ke view edit.blade.php
       return view('lihattt', ['pegawai' => $pegawai]);
    }
}
