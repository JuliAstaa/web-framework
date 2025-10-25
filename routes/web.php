<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/product", [ProductController::class, "index"]);

Route::get("/product/detail/{id}", [ProductController::class, "show"]);

Route::get("/product/jenis/{jenis}", [ProductController::class, "showByJenis"]);
