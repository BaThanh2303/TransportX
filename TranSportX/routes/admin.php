<?php
Route::prefix("product")->group(function (){
    Route::get("/",[\App\Http\Controllers\ProductController::class,"index"]);
    Route::get("/create",[\App\Http\Controllers\ProductController::class,"create"]);
    Route::post("/create",[\App\Http\Controllers\ProductController::class,"store"]);
    Route::get("/edit/{product}",[\App\Http\Controllers\ProductController::class,"edit"]);
    Route::put("/edit/{product}",[\App\Http\Controllers\ProductController::class,"update"]);
    Route::delete("/delete/{product}",[\App\Http\Controllers\ProductController::class,"delete"]);
});
