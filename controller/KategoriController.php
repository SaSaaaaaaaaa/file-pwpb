<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function view(){
        return view('kategori.index');
    }
}
