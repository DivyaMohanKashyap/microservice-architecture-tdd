<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware"=> "api.auth"], function () {
    Route::get("users/{id}", [UserController::class, "show"])->name("users.show");
});