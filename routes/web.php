<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/guest.php';

Route::get('/500', function(){
    abort(500);
});

