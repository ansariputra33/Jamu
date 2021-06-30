<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\VillageProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });
// Route::get("/pintu-masuk", function(){
//     return "selamat datang di pintu masuk";
// });

//Route halaman utama (frontend)
Route::get("/", [indexController::class, 'halutama' ])->name('home');

//Route autentikasi
Route::get("/login", [loginController::class, 'login']);
Route::get("/register", [RegisterController::class,'create']);

Route::get("/about", [IndexController::class, 'about'])->name('about');

Route::get("/checkout", [checkoutController::class, 'checkout'])->name('checkout');


//route untuk admin LTE
Route::get('/about2', function () {
    return view('about2');
});


Route::post("/admin/auth", [AdminController::class, 'auth'])->name('admin-auth');
Route::middleware(['admin'])->group(function () {

    Route::get("/admin", [AdminController::class, 'index'])->name('admin');
    Route::get("/dashboard", [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get("/profil", [AdminController::class, 'profil'])->name('profil');
    Route::post("/info-add", [AdminController::class, 'infoAdd'])->name('info-add');
    Route::get("/info-edit/{i}", [AdminController::class, 'editInfo'])->name('info-edit');
    Route::post("/profil-update", [AdminController::class, 'profilUpdate'])->name('profil-update');
    Route::get("/info-delete/{i}", [AdminController::class, 'deleteInfo'])->name('info-delete');     

    Route::get("/produk/list", [ProductController::class, 'list'])->name('produk-list');
    Route::get("/produk/fetch/{s}", [ProductController::class, 'list_fetch'])->name('produk-fetch');
    Route::post("/produk/store", [ProductController::class, 'store'])->name('produk-store');
    Route::get("/produk/edit/{p}", [ProductController::class, 'edit'])->name('produk-edit');
    Route::post("/produk/update", [ProductController::class, 'update'])->name('produk-update');
    Route::get("/produk/delete/{p}", [ProductController::class, 'delete'])->name('produk-delete');

    Route::get("/pesanan/list", [PesananController::class, 'list'])->name('list-pesanan');
    Route::get("/pesanan/terima/{id}", [PesananController::class, 'terima'])->name('terima-pesanan');
    Route::get("/pesanan/selesai/{id}", [PesananController::class, 'selesai'])->name('selesai-pesanan');
    Route::get("/pesanan/batal/{id}", [PesananController::class, 'batal'])->name('batal-pesanan');

});


Route::get("/order/{p}", [IndexController::class, 'buat_pesanan'])->name('buat-pesanan');
Route::post("/pesanan/store", [IndexController::class, 'store_pesanan'])->name('store-pesanan');

Route::get("/profil-desa", [VillageProfileController::class, 'index'])->name('profil-desa');
Route::get("/tambah-profil", [VillageProfileController::class, 'create'])->name('tambah-profil');
Route::get("/ubah-profil", [VillageProfileController::class, 'edit'])->name('ubah-profil');
//Route::get("/data-produk", [ProductController::class, 'edit'])->name('data-produk');

Route::get("/tambah-produk", [ProductController::class, 'create'])->name('tambah-produk');
Route::get("/ubah-produk", [adminController::class, 'edit'])->name('ubah-produk');
Route::resource("/village", VillageProfileController::class);




Route::get("/show-all-items", [ItemController::class, 'showAllItems']);
Route::get("categories", [categoryController::class, 'index']);
Route::get("search", [productController::class, 'search']);






Auth::routes();

// Route::get('/profil-desa', [App\Http\Controllers\HomeController::class, 'index'])->name('profil-desa');

