<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld',[HelloWorldController::class, 'index']);
Route::get('ambilfile',[HelloWorldController::class, 'ambilfile']);
Route::get('getlorem',[HtmlController::class, 'getLorem']);