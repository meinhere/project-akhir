<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'JagoKebun . Chat dengan Petani'
        ];

        return view('chat', $data);
    }
}
