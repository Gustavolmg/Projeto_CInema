<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
});

Route::get("/Filme",function (){
    return view('Filme');
});

Route::get('Perfil', function () {
    return view('Perfil');
});

Route::get('Salas', function () {
    return view('Salas');
});

Route::get('Welcome_Laravel', function () {
    return view("welcome");
});