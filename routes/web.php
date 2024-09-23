<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("roleAuth:user")->group(function () {
    Route::get("/user", function () {
        return view("user");
    });
    Route::get("/blog", function () {
        return view("user");
    });
});

Route::get("/about-us", function () {
    return view("about-us");
});

Route::get("/terms-and-condition", function () {
    return view("terms-and-condition");
});

Route::get("/privacy-policy", function () {
    return view("privacy-policy");
});

Route::get("/auction-cars", function () {
    return view("auction-cars");
});

Route::middleware("roleAuth:admin")->group(function () {
    Route::get("/admin/create", [UserController::class, 'create'])->name('admin.create');
    Route::get("/admin/{id}", [UserController::class, 'show'])->name('admin.show');
    Route::get("/admin/edit/{id}", [UserController::class, 'edit'])->name('admin.edit');
});

Route::middleware('roleAuth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get("/admin", [UserController::class, "index"])->name("user");
    Route::get("/about", function () {
        return view("about");
    })->name("about");
});
