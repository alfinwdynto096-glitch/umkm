<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('produk');
    }

    public function menu()
    {
        return view('menu');
    }

    public function admin()
    {
        return view('admin-produk');
    }

    public function tambah()
    {
        return view('produk-add');
    }
}
