<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function tampil()
    {
        $nama = "Muhammad Zulfan Hanafi";

        return view('welcome', ['nama' => $nama]);
    }
}