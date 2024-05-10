<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/selam', function () {
    return "selamat belajar fahri";
});

Route::get('/Beranda', function (){
    return "halaman beranda";
});

