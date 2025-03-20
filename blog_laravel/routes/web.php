<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[PageController::class,'index'])->name('home');
Route::get("/about",[PageController::class,'about'])->name('about');
Route::get("/posts",[PageController::class,'posts'])->name('posts');
Route::get("/contact",[PageController::class,'contact'])->name('contact');
Route::post("/contact_action",[PageController::class,'contact_action'])->name('contact.action');

