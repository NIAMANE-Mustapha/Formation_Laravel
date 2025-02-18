<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/about',[HomeController::class,'home'])->name('about');


Route::get('/blog/{id}/{book?}',[HomeController::class,'blog'])->name('blog');

