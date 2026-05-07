<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
    //
    public function index() {
        return view('kategori');
    }

    public function admin() {

        $query = kategori::all();
        // dd($query);
        return view('admin-kategori', compact('query'));
    }
}
