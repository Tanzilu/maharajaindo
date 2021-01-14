<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $items = Product::get();

        return view('frontpage.products')->with([
            'items' => $items
        ]);
    }
}
