<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
  public function index()
  {
    $pesan = \DB::table('chat')->first()->pesan;

    $pesan = explode(" ", $pesan);

    foreach ($pesan as $kata) {
      if ($kata == ":))") {
        $kata = "<img src='public/img/1.png'>";
      } else if ($kata == ":C") {
        $kata = "<img src='public/img/4.png'>";
      } else if ($kata == ":3") {
        $kata = "<img src='public/img/2.png'>";
      } else if ($kata == ":P") {
        $kata = "<img src='public/img/3.png'>";
      }
    }

    $pesan = implode(" ", $pesan);

    return view('chat', [
      'pesan' => $pesan,
    ]);
  }
}


class ChatController extends Controller
{
  public function index()
  {
    $pesan = \DB::table('chat')->first()->pesan;

    $pesan = explode(" ", $pesan);

    foreach ($pesan as $kata) {
      if ($kata == ":))") {
        $kata = "<img src='public/img/1.png'>";
      } else if ($kata == ":C") {
        $kata = "<img src='public/img/4.png'>";
      } else if ($kata == ":3") {
        $kata = "<img src='public/img/2.png'>";
      } else if ($kata == ":P") {
        $kata = "<img src='public/img/3.png'>";
      }
    }

    $pesan = implode(" ", $pesan);

    return view('chat', [
      'pesan' => $pesan,
    ]);
  }
}
