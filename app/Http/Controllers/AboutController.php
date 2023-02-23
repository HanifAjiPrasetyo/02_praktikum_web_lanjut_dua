<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return "<h2>Nama    : Hanif Aji Prasetyo<br>NIM     : 2141720090";
    }
}
