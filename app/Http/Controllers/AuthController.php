<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    
    public function registerForm()
    {
    	return view('layouts.register');
    }

    
}