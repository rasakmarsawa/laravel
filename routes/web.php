<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Making 2nd route with view
// Route::get('/second', function () {
//     return view('second');
// });

//Making 3rd route but no view
Route::get('/third', function () {
    return view('third');
});

//Simpler code for routing without logic usage
Route::view('/second', 'second');


