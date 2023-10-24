<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\ProductController::class,"Home"]);
Route::get('/contact', [\App\Http\Controllers\ProductController::class,"contact"]);
Route::get('/about', [\App\Http\Controllers\ProductController::class,"about"]);
Route::get('/services', [\App\Http\Controllers\ProductController::class,"services"]);
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix("account")->group(function (){
        Route::get("/address", [\App\Http\Controllers\ProfileController::class, "addressUser"]);
    });

    Route::prefix("product")->group(function () {
        Route::get("/", [\App\Http\Controllers\ProductController::class, "index"]);
        Route::get("/create", [\App\Http\Controllers\ProductController::class, "create"]);
        Route::post("/create", [\App\Http\Controllers\ProductController::class, "store"]);
        Route::get("/edit/{product}", [\App\Http\Controllers\ProductController::class, "edit"]);
        Route::put("/edit/{product}", [\App\Http\Controllers\ProductController::class, "update"]);
        Route::delete("/delete/{product}", [\App\Http\Controllers\ProductController::class, "delete"]);
    });
});
Route::middleware(["auth","is_admin"])->prefix("admin")->group(function (){
    include_once "admin.php";
});

require __DIR__.'/auth.php';
