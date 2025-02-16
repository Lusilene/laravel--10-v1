<?php

use App\Http\Controllers\Lo\LoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view ('welcome');

});


Route::get('/clientes',[LoController::class, 'clientes']);


