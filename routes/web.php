<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/daftar', [AuthController::class, 'daftar'])->name('daftar');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/users', [KelolaUserController::class, 'admin'])->name('kelolauser');
Route::get('/admin/kategori', [KategoriController::class, 'admin'])->name('admin.kategori');
Route::get('/admin/produk', [ProdukController::class, 'admin'])->name('admin.produk');
Route::get('/admin/mitra', [MitraController::class, 'index'])->name('admin.mitra');
Route::get('admin/users', [KelolaUserController::class, 'index'])->name('kelolauser');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/tambah', [ProdukController::class, 'add'])->name('produk.tambah');
Route::get('/menu', [ProdukController::class, 'menu'])->name('menu');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');

Route::get('/kelolauser', [KelolaUserController::class, 'index']);

Route::get('/managerdashboard', [ManagerDashboardController::class, 'index']);
