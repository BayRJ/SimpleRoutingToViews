<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello,Laravel!';
});

Route::get('/greet',[GreetController::class, 'greetMethod']);
