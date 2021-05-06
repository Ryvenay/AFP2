<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function show() {

    }

    public function make() {

        $items = CartController::getCartItems();
        $user = Auth::user();

        $order = new Order;

        $order -> user_id = $user->id;
        $order -> billing_address = $user->billing_address;
        $order -> shipping_address = $user->shipping_address;
        $order->status = 0;

        $order ->save();

        foreach ($items as $item) {
            Package::Create([
                "product_id" => $item->product_id,
                "order_id" => $order->id,
                "amount" => $item->amount
            ]);
        }

        Cart::where('user_id', $user->id)->delete();

        return redirect('/');
    }

    private function getOrderById($id) {
        return Order::where('id', $id)->first();
    }

    public function index() {
        $orders = $this -> getOrders();

        return view('orders.orders', [
            'orders' => $orders
        ]);
    }

    private function getOrderByUserId(int $user) {
        return Order::where('user_id', $id)->get();
    }

    private function getOrderByUser(User $user) {
        return Order::where('user_id', $user->id)->get();
    }

    private function getOrders() {
        return Order::all();
    }

}
