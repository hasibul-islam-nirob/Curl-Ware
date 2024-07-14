<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Project Ready';
});

require __DIR__.'/auth.php';
