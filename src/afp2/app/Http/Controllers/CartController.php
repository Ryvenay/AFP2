<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index() {
        return view('users.cart', [
            'cart' => $this->getCartItems()
        ]);
    }

    public function addToCart(Request $request, Product $product) {
        // ddd($request);
        Cart::upsert([
            'product_id' => $product->id,
            'user_id' => Auth::user()->id,
            'amount' => $request->input('quantity')
        ], 
        [
            'user_id', 'product_id'
        ]);
        return back()->with('status', 'Added to cart!');
    }

    public function getCartItems(){
        return Cart::where('user_id', '=', Auth::user()->id)->get();  
    }

}
