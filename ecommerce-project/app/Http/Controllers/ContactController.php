<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function view(){
        return view('contact_us.index');
    }
}
