<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function view(){
        return view('homepage.index');
    }
    public function viewfaq(){
        return view('faq.index');
    }
}
