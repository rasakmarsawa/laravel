<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

//Making 3rd route but no view
Route::get('/third', function () {
    return view('third');
});

//Simpler code for routing without logic usage
Route::view('/second', 'second');

// Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/article', 'article')->name('article');

// get data and passing it in route logic, no controller
// Route::get('/', function () {
//     $categories = DB::table('categories')->get();
//     return view('home', ['categories' => $categories]);
// })->name('home');

// Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');