<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("roleAuth:user")->group(function () {
    Route::get("/user", [PostController::class, "index"])->name("user.account");
    Route::get("/user/blog", [PostController::class, "blog"])->name("user.blog");
    Route::get("/user/blog/create", [PostController::class, "create"])->name("blog.create");
    Route::post("/user/blog", [PostController::class, "store"])->name("posts.store");
    Route::get("/user/blog/{id}", [PostController::class, "show"])->name("blog.show");
    Route::get("/user/blog/{id}/edit", [PostController::class, "edit"])->name("blog.edit");
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

Route::middleware('roleAuth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get("/admin", [UserController::class, "index"])->name("user");
    Route::get("/admin/create", [UserController::class, 'create'])->name('admin.create');
    Route::get("/admin/{id}", [UserController::class, 'show'])->name('admin.show');
    Route::get("/admin/edit/{id}", [UserController::class, 'edit'])->name('admin.edit');
    Route::get("/about", function () {
        return view("about");
    })->name("about");
});
