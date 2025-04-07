<?php

use App\Http\Controllers\HtmlController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', [HelloWorldController::class, 'index']);
Route::get('/ambilfile', [HelloWorldController::class, 'ambilfile']);
Route::get('/getlorem', [HtmlController::class, 'getlorem']);
Route::get('/tabel', [LatihanController::class, 'getTabel'])->name('latihan.tabel');
Route::get('/form', [LatihanController::class, 'getForm'])->name('latihan.form');
Route::post('/form/simpan', [LatihanController::class, 'simpan'])->name('latihan.simpan');
