<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/daftar', [AuthController::class, 'daftar'])->name('daftar');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/users', [KelolaUserController::class, 'index'])->name('admin.kelolauser');
Route::get('/admin/kategori', [KategoriController::class, 'admin'])->name('admin.kategori');
Route::get('/admin/produk', [ProductController::class, 'admin'])->name('admin.produk');
Route::get('/admin/mitra', [MitraController::class, 'index'])->name('admin.mitra');

Route::get('/produk', [ProductController::class, 'index'])->name('produk');
Route::get('/produk/tambah', [ProductController::class, 'tambah'])->name('produk.tambah');
Route::get('/menu', [ProductController::class, 'menu'])->name('menu');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');