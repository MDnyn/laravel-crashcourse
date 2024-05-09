<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $name='Adnin Ali';
    
    return view('hello', compact('name'));
});