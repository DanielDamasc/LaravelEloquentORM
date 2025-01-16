<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TesteModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // $products = Product::all()->toArray();
        // print_r($products);

        $results = TesteModel::all()->toArray();
        print_r($results);
    }
}
