<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatihanController extends Controller
{
    public function indexlatihan()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $latihan = DB::table('latihan')->paginate(15);
        // mengirim data pegawai ke view index
        return view('indexlatihan', ['latihan' => $latihan]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahlatihan()
    {
        // memanggil view tambah
        return view('tambahlatihan');
    }

    // method untuk insert data ke table pegawai
    public function storelatihan(Request $request)
    {
        // insert data ke table pegawai
        DB::table('latihan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/latihan');

    }

    // method untuk edit data pegawai
    public function editlatihan($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $latihan = DB::table('latihan')->where('kodepegawai', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editlatihan', ['latihan' => $latihan]);
    }

    // update data pegawai
    public function updatelatihan(Request $request)
    {
        // update data pegawai
        DB::table('latihan')->where('kodepegawai', $request->id)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/latihan');

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
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('indexkaryawan', ['karyawan' => $karyawan, 'cari' => $cari]);
    }

    public function viewlatihan($id)
    {
       // mengambil data pegawai berdasarkan id yang dipilih
       $latihan = DB::table('latihan')->where('kodepegawai', $id)->get();
       // passing data pegawai yang didapat ke view edit.blade.php
       return view('viewlatihan', ['latihan' => $latihan]);
    }
}
