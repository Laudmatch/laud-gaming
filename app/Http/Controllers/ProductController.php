<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show()
    {
        return Product::all();
    }
}