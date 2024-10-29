<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\RuteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ini adalah rute tanpa MVC
Route::get('/rutebaru', function()
    {
        return '<h1 style="color:blue;">ini adalah rute baru tanpa MVC</h1>';
    });


// ini adalah rute dengan view
    Route::get('/ruteview', function () {
        return view('ruteview');
    });

// Ini adalah rute dengan view & controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);

// Ini adalah rute dengan view, controller & Model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);


Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);

