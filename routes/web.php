<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/product", [ProductController::class, "index"]);

Route::get("/product/search", [
    ProductController::class,
    "searchProduct",
])->name("product.search");

Route::get("/product/detail/{id}", [ProductController::class, "show"])->name(
    "product.detail",
);

Route::get("/product/jenis/{jenis}", [ProductController::class, "showByJenis"]);

Route::prefix("pelanggan")->group(function () {
    Route::get("/profile", [PelangganController::class, "profile"])->name(
        "profile",
    );
    Route::get("/list", [PelangganController::class, "list"])->name("list");

    Route::get("/{id}", [PelangganController::class, "show"])->name("show");

    Route::get("/{id}/grade/{gradeName}", [
        PelangganController::class,
        "grade",
    ])->name("grade");
});
