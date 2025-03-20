<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/",[PageController::class,"index"])->name("home");
Route::post("/contactAction",[PageController::class,"contact_action"])->name("contact.action");
Route::get("/contact",[PageController::class,"contact"])->name("contact");
Route::get("/history",[PageController::class,"history"])->name("history");
Route::get("/login",[PageController::class,"login"])->name("login");
Route::get("/major",[PageController::class,"major"])->name("major");
Route::get("/regester",[PageController::class,"regester"])->name("regester");
Route::get("/indexdoctoe",[PageController::class,"indexdoctoe"])->name("index_doctor");
Route::get("/doctor",[PageController::class,"doctor"])->name("doctor");