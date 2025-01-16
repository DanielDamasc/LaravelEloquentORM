<?php

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $products = Product::all();
    echo '<pre>';
    print_r($products->toArray());
});
