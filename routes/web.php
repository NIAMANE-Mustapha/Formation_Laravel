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
Route::view('/about',[HomeController::class,'home']);
Route::get('/welcome/{id}/{book?}', function ($id,$books) {
    $posts=[
        1=>['title'=>'laravel'],
        2=>['title'=>'react']
    ];
    return view('welcome',['data'=>$posts[$id]]) ;
});
