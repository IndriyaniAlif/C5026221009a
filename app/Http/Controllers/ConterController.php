<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{

public function indexconter()
	{
    	// Update jumlah terlebih dahulu
        DB::table('conter')->increment('Jumlah');

        // Ambil nilai Jumlah setelah diupdate
        $jumlahPengunjung = DB::table('conter')->where('ID', 1)->value('Jumlah');

        // Tampilkan view dengan data jumlah pengunjung
        return view('indexconter', ['jumlahPengunjung' => $jumlahPengunjung]);
	}
}
