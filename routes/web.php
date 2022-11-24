<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SavingFromTransfer;
use App\Http\Controllers\RetrieveHistorySiswa;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\inputberitaController;
use App\Http\Controllers\ProfileSiswaController;
use App\Http\Controllers\ListTransaksiController;
use App\Http\Controllers\SavingbyAdmin;
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\ListSiswaController;

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

// Route::resource('/auth', LoginController::class);

Route::get("/", '\App\Http\Controllers\LandingPageController@landingpage')->name("landing-page");

// ONLY AVAILABLE FOR NON AUTHENTICATED USERS
Route::get('/register', '\App\Http\Controllers\Auth\RegisterController@view')->middleware("guest")->name("register");
Route::post('/register', '\App\Http\Controllers\Auth\RegisterController@register');

// ONLY AVAILABLE FOR NON AUTHENTICATED USERS
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@view')->middleware('guest')->name("login");
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@authenticate');

// ONLY AVAILABLE FOR AUTHENTICATED USERS
Route::post('/logout', [LogoutController::class, 'logout']);

// WRAP ALL ADMIN'S PAGES INTO A GROUP WITH LEVEL 1, USER CANNOT ACCESS THIS ROUTE
Route::group(['middleware' => ['auth', 'auth-level:1']], function () {
    Route::get('/adminpage-dashboard', [BeritaController::class, 'index'])->name("admin-dashboard");

    Route::get('/adminpage-listsiswa', function () {
        $notifications = auth()->user()->unreadNotifications;
        $no = 1;
        return view('pages/adminpage-listsiswa', compact('notifications', 'no'));
    });
    

    Route::get('/adminpage-listsiswa', [ListSiswaController::class, 'tampil'])->name('siswa');
    Route::get('/adminpage-profile/{id}', [ListSiswaController::class, 'profile'])->name("profile");
    Route::get('/adminpage-editsiswa/{id}', [ListSiswaController::class, 'edit'])->name('edit');
    Route::put('/adminpage-update/{id}', [ListSiswaController::class, 'update'])->name('update');
    Route::put('/adminpage-delete/{id}', [ListSiswaController::class, 'delete'])->name('delete');
    
    Route::post('/tabungin', [SavingbyAdmin::class, 'save']);
    
    Route::get('/adminpage-listtransaksi', [ListTransaksiController::class, 'index'])->name("list-transaksi");
    Route::get('/confirmtransaksi/{id}', [ListTransaksiController::class, 'confirm']);
    Route::get('/rejecttransaksi/{id}', [ListTransaksiController::class, 'reject']);

    Route::get('/adminpage-listtransaksi/history_pdf', [App\Http\Controllers\ListTransaksiController::class, 'history_pdf']);

    Route::get('/adminpage-addtransaksi', [SearchController::class, 'index']);
    
    Route::get('/adminpage-inputberita', [inputberitaController::class, 'show'])->name('inputberita');
    Route::get('/inputberita/edit/{id}', [inputberitaController::class, 'edit']);
    
    Route::get('/adminpage-listberita', [inputberitaController::class, 'new']);
    Route::post('/inputberita/hapus/{id}', [inputberitaController::class, 'delete']);
    Route::post('/inputberita/update/{id}', [inputberitaController::class, 'update']);

    Route::post('store',[inputberitaController::class, 'store']);
});

// WRAP ALL USER'S PAGES INTO A GROUP WITH LEVEL 2, ADMIN CANNOT ACCESS THIS ROUTE
Route::group(['middleware' => ['auth', 'auth-level:2']], function () {
    Route::get('/siswapage-dashboard', [DashboardSiswaController::class, 'show'])->name('user-dashboard');

// SHOW AND EDIT PROFILE FOR STUDENT PAGE.
    Route::get('/siswapage-profile', [ProfileSiswaController::class, 'profile'])->name('profilesiswa');    
    Route::get('/siswapage-editprofile', [ProfileSiswaController::class, 'editprofile']);

    
    // Route::get('/siswapage-profile', [ProfileSiswaController::class, 'profile'])->name('profile');
    
    // Route::get('/siswapage-editprofile', [ProfileSiswaController::class, 'editprofile']);

    Route::post('/update', [ProfileSiswaController::class, 'update']);
    
    Route::get('/siswapage-historitabungan', [RetrieveHistorySiswa::class, 'show']);
    
    Route::get('/siswapage-tambahtabungan', function () {
        return view('pages/siswapage-tambahtabungan',[
            "title" => "Tambah",
            "name" => "Wildan Taufik"
        ]);
    });

    Route::post('/tabung', [SavingFromTransfer::class, 'save']);
});


Route::get('/halamannabung', function () {
    return view('pages/siswapage-halamannabung', [
        "title" => "Dashboard"
    ]);
});

Route::get('/history', function () {
    return view('pages/history');
});

Route::get('/preview', function () {
    return view('pages/preview');
});

Route::get('/print', function () {
    return view('pages/print');
});



