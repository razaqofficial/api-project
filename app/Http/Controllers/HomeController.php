<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return response()->json([
            'products' => $products
        ]);
    }
}
