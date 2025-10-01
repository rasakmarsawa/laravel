<?php

use Illuminate\Support\Facades\Route;

//Making 3rd route but no view
Route::get('/third', function () {
    return view('third');
});

//Simpler code for routing without logic usage
Route::view('/second', 'second');

Route::view('/', 'home');


