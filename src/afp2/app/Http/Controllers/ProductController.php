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

        return view('products.product', [
            'product' => $product
        ]);
    }

    public function create() {
        return view ('products.create');
    }

    public function save() {
        Product::create($request->validate([
            'name' => ['required', 'max:25'],
            'brand' => ['required', 'max:25'],
            'category' => 'required',
            'quantity' => ['required','numeric', 'min:0'],
            'price' => ['required','numeric', 'min:0'],
            'picture' => ['required', 'image'],
            'excerpt' => ['required', 'max:50'],
            'description' => 'required'
        ]));

        return redirect('/articles');
    }

    public function edit(Product $product) {

        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(Product $product) {
        Product::update($request->validate([
            'name' => ['required', 'max:25'],
            'brand' => ['required', 'max:25'],
            'category' => 'required',
            'quantity' => ['required','numeric', 'min:0'],
            'price' => ['required','numeric', 'min:0'],
            'picture' => ['required', 'image'],
            'excerpt' => ['required', 'max:50'],
            'description' => 'required'
        ]));

        return redirect('/articles'.$product->id);
    }

    public function delete($id) {
        $success = Product::where('id', $id);
        return $success;
    }

    public static function getNewProducts() {
        return Product::orderBy('created_at', 'desc')->take(4)->get();
    }

}
