<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\MyController;

Route::get('/mycontroller',
[MyController::class,'myfunction']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});