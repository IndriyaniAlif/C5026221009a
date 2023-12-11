<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function indexchat()
    {
        $chats = DB::table('chat')->get();

        return view('indexchat', ['chats' => $chats]);
    }
}
