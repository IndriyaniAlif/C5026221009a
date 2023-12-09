<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaController extends Controller
{
    public function indexsepeda()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $sepeda = DB::table('sepeda')->paginate(15);
        // mengirim data pegawai ke view index
        return view('indexsepeda', ['sepeda' => $sepeda]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahsepeda()
    {
        // memanggil view tambah
        return view('tambahsepeda');
    }

    // method untuk insert data ke table pegawai
    public function storesepeda(Request $request)
    {   if($request->stocksepeda>0){
            $tersedia="Y";
        }else{
            $tersedia="N";
        }
        // insert data ke table pegawai
        DB::table('sepeda')->insert([
            'merksepeda' => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia' => $tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/sepeda');

    }

    // method untuk edit data pegawai
    public function editsepeda($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $sepeda = DB::table('sepeda')->where('kodesepeda', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editsepeda', ['sepeda' => $sepeda]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        if($request->stocksepeda>0){
            $tersedia="Y";
        }else{
            $tersedia="N";
        }
        // update data pegawai
        DB::table('sepeda')->where('kodesepeda', $request->id)->update([
            'merksepeda' => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia' => $tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/sepeda');

    }

    // method untuk hapus data pegawai
    public function hapussepeda($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('sepeda')->where('kodesepeda', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/sepeda');
    }

    // method untuk mencari data pegawai
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $sepeda = DB::table('sepeda')
            ->where('merksepeda', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('indexsepeda', ['sepeda' => $sepeda, 'cari' => $cari]);
    }

    public function viewsepeda($id)
    {
       // mengambil data pegawai berdasarkan id yang dipilih
       $sepeda = DB::table('sepeda')->where('kodesepeda', $id)->get();
       // passing data pegawai yang didapat ke view edit.blade.php
       return view('viewsepeda', ['sepeda' => $sepeda]);
    }
}
