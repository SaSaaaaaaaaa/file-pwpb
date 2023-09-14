<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopDetailsController extends Controller
{
    function view(){
        return view('shop-details.index');
    }
}
