<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return ['Laravel' => app()->version()];
    return "Halo smartcertix";
});

require __DIR__.'/auth.php';
