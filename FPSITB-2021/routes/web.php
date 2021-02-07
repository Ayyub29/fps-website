<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\UserLolosController;
use App\Http\Controllers\BeritaController;

use App\Http\Controllers\PublikController;
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

Route::get('/', [PublikController::class, 'index']);

Route::get('/faq', [PublikController::class, 'faq']);

Route::get('/visi-misi', [PublikController::class, 'visiMisi']);

Route::get('/tema', [PublikController::class, 'tema']);

Route::get('/makna-logo', [PublikController::class, 'maknaLogo']);

Route::get('/dewan-artistik', [PublikController::class, 'timArtistik']);

Route::get('/festival-grup-vokal', [PublikController::class, 'festivalGrupVokal']);

Route::get('/dewan-artistik', [PublikController::class, 'timArtistik']);


// Route::get('/AccountSetting', function () {
//     return view('account-setting');
// });

Route::get('/pendaftaran', function () {
    if (Auth::guest()){
        return view('pendaftaran-belumlogin');
    } else{
        return view('pendaftaran');
    }
});

Route::get('/pendaftaran-tim-padus', function () {
    return view('pendaftaran-tim-padus');
});

Route::get('/admin-panel', [AdminController::class, 'index']);
Route::get('/admin-panel/pengumuman', [BeritaController::class, 'index']);
Route::get('/admin-panel/pengumuman/tambah', [BeritaController::class, 'create']);
Route::post('/admin-panel/pengumuman', [BeritaController::class, 'store']);
Route::delete('/admin-panel/pengumuman/{berita}', [BeritaController::class, 'destroy']);
Route::get('/admin-panel/pengumuman/{berita}/edit', [BeritaController::class, 'edit']);
Route::patch('/admin-panel/pengumuman/{berita}', [BeritaController::class, 'update']);

Route::get('/pengaturan-akun', [AkunController::class, 'index']);
Route::get('/pengaturan-akun/edit', [AkunController::class, 'edit']);
Route::post('/pengaturan-akun', [AkunController::class, 'update']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
