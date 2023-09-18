<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function view(){
        return view('cart.index');
    }
    public function viewco(){
        return view('check-out.index');
    }
    public function viewwi(){
        return view('wishlist.index');
    }
}
