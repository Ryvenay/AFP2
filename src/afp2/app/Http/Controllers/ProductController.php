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

    public function show(Product $product) {
        $product = Product::findOrFail($id);

        return view('products.product', [
            'product' => $product
        ]);
    }

    public function create() {
        return view ('products.create');
    }

    public function store() {
        Article::create(request()->validate([
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'picture' => 'required',
            'excerpt' => 'required',
            'description' => 'required'
        ]));

        return redirect('/articles');
    }

    public function edit(Product $product) {


        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function delete($id) {
        $success = Product::where('id', $id);
        return $success;
    }


}
