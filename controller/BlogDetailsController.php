<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    function view(){
        return view('blog_details.index');
    }
}
