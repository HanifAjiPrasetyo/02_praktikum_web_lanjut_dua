<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "<h2>Selamat Datang</h2>";
    }

    public function about()
    {
        return "<h2>Nama    : Hanif Aji Prasetyo<br>NIM     : 2141720090";
    }
    public function articles($id)
    {
        return "<h2>Halaman Artikel dengan ID " . $id . "</h2>";
    }
}
