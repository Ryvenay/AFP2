<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.list', [
            'products' => $products
        ]);
    }

    public function show($id) {
        $product = Product::findOrFail($id);

        return view('products.product', [
            'product' => $product
        ]);
    }

    public function create() {
        return view ('products.create');
    }

    public function edit($id) {
        $pruduct = Product::findOrFail($id);

        return view('products.edit', [
            'product' => $product
        ]);
    }


}
