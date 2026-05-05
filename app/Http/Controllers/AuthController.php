<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function daftar()
    {
        return view('daftar');
    }
}
