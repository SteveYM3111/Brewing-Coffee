<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function product()
    {
        return view('product');
    }

    public function login()
    {
    return view('login');
    }

    public function lokasi()
    {
    return view('lokasi');
    }

    public function register()
    {
    return view('register');
    }
    
    public function loginAdmin()
    {
    return view('loginAdmin');
    }

    public function about()
    {
    return view('about');
    
    }
    public function payment()
    {
    return view('payment');
    }
    
    public function home2()
    {
    return view('home2');
    }
}