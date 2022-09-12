<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DestinasiController;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;

use App\Http\Controllers\BudayaController;
use App\Http\Controllers\KulinerController;

use App\Http\Controllers\EventController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
// // untuk dashboard
// Route::get('/dashboard', function () {
//     return view('adm_dashboard');
// });

// untuk menu beranda
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('beranda');
});

// untuk menu wisata


Route::get('/blogwisata', [BlogController::class, 'index']);
Route::get('/blogwisata/{id}/vblog', [BlogController::class, 'view']);
Route::get('/admin/blogwisata', [BlogController::class, 'admIndexBlog']);
Route::get('/admin/blogwisata/tblog', [BlogController::class, 'adminTBlog']);
Route::get('/admin/blogwisata/{id}/eblog', [BlogController::class, 'edit']);
Route::patch('/admin/blogwisata/{id}/ublog', [BlogController::class, 'update']);
Route::post('/admin/blogwisata', [BlogController::class, 'store']);
Route::delete('/admin/blogwisata/{id}', [BlogController::class, 'destroy']);


Route::get('/destinasiwisata', [DestinasiController::class, 'index']);
Route::get('/destinasiwisata/{id}/vdestinasi', [DestinasiController::class, 'view']);
Route::get('/admin/destinasiwisata', [DestinasiController::class, 'admIndexDestinasi']);
Route::get('/admin/destinasiwisata/tdestinasi', [DestinasiController::class, 'adminTDestinasi']);
Route::get('/admin/destinasiwisata/{id}/edestinasi', [DestinasiController::class, 'edit']);
Route::patch('/admin/destinasiwisata/{id}/udestinasi', [DestinasiController::class, 'update']);
Route::post('/admin/destinasiwisata', [DestinasiController::class, 'store']);
Route::delete('/admin/destinasiwisata/{id}', [DestinasiController::class, 'destroy']);

Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/hotel/{id}/vhotel', [HotelController::class, 'view']);
Route::get('/admin/hotel', [HotelController::class, 'admIndexHotel']);
Route::get('/admin/hotel/thotel', [HotelController::class, 'adminTHotel']);
Route::get('/admin/hotel/{id}/ehotel', [HotelController::class, 'edit']);
Route::patch('/admin/hotel/{id}/uhotel', [HotelController::class, 'update']);
Route::post('/admin/hotel', [HotelController::class, 'store']);
Route::delete('/admin/hotel/{id}', [HotelController::class, 'destroy']);




// untuk menu media

Route::get('/media', function () {
    return view('media/media');
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{id}/vberita', [BeritaController::class, 'view']);
Route::get('/admin/berita', [BeritaController::class, 'admIndexBerita']);
Route::get('/admin/berita/tberita', [BeritaController::class, 'adminTBerita']);
Route::get('/admin/berita/{id}/eberita', [BeritaController::class, 'edit']);
Route::patch('/admin/berita/{id}/uberita', [BeritaController::class, 'update']);
Route::post('/admin/berita', [BeritaController::class, 'store']);
Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy']);


Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/pengumuman/{id}/vpengumuman', [PengumumanController::class, 'view']);
Route::get('/admin/pengumuman', [PengumumanController::class, 'admIndexPengumuman']);
Route::get('/admin/pengumuman/tpengumuman', [PengumumanController::class, 'adminTPengumuman']);
Route::get('/admin/pengumuman/{id}/epengumuman', [PengumumanController::class, 'edit']);
Route::patch('/admin/pengumuman/{id}/upengumuman', [PengumumanController::class, 'update']);
Route::post('/admin/pengumuman', [PengumumanController::class, 'store']);
Route::delete('/admin/pengumuman/{id}', [PengumumanController::class, 'destroy']);


// untuk menu informasi

Route::get('/budaya', [BudayaController::class, 'index']);
Route::get('/budaya/{id}/vbudaya', [BudayaController::class, 'view']);
Route::get('/admin/budaya', [BudayaController::class, 'admIndexBudaya']);
Route::get('/admin/budaya/tbudaya', [BudayaController::class, 'adminTBudaya']);
Route::get('/admin/budaya/{id}/ebudaya', [BudayaController::class, 'edit']);
Route::patch('/admin/budaya/{id}/ubudaya', [BudayaController::class, 'update']);
Route::post('/admin/budaya', [BudayaController::class, 'store']);
Route::delete('/admin/budaya/{id}', [BudayaController::class, 'destroy']);

Route::get('/kuliner', [KulinerController::class, 'index']);
Route::get('/kuliner/{id}/vkuliner', [KulinerController::class, 'view']);
Route::get('/admin/kuliner', [KulinerController::class, 'admIndexKuliner']);
Route::get('/admin/kuliner/tkuliner', [KulinerController::class, 'adminTKuliner']);
Route::get('/admin/kuliner/{id}/ekuliner', [KulinerController::class, 'edit']);
Route::patch('/admin/kuliner/{id}/ukuliner', [KulinerController::class, 'update']);
Route::post('/admin/kuliner', [KulinerController::class, 'store']);
Route::delete('/admin/kuliner/{id}', [KulinerController::class, 'destroy']);


// untuk menu layanan publik

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/{id}/vevent', [EventController::class, 'view']);
Route::get('/admin/event', [EventController::class, 'admIndexEvent']);
Route::get('/admin/event/tevent', [EventController::class, 'adminTEvent']);
Route::get('/admin/event/{id}/eevent', [EventController::class, 'edit']);
Route::patch('/admin/event/{id}/uevent', [EventController::class, 'update']);
Route::post('/admin/event', [EventController::class, 'store']);
Route::delete('/admin/event/{id}', [EventController::class, 'destroy']);


//untuk menu login
// Route::get('/login', function () {
//     return view('login/login');
// });

// Route::post('/login', [LoginController::class, 'authenticate']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
