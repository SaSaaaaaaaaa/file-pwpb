<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    function view(){
        return view('forgot-password.index');
    }
    
    use SendsPasswordResetEmails;
}
