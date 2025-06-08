<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

// All frontend routes go to Vue app via welcome.blade.php
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '^(?!api).*$');


Route::get('/products', function () {
    return Product::all();
});
