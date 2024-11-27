<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['id' => null]);
});

Route::get('/{id}', function ($id) {
    return view('index', ['id' => $id]);
});
