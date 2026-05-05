<?php

namespace App\Http\Controllers;

class KategoriController extends Controller
{
    //
    public function index()
    {
        return view('kategori');
    }

    public function admin()
    {
        return view('admin-kategori');
    }
}
