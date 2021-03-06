<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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
            'title' => "All product",
            'product' => $product
        ]);
    }

    public function create() {

        if(Auth::user()->level < 0) {
            return redirect('home');
        }

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
        return Product::orderBy('created_at', 'desc')->get();
    }

    public static function getFewLeft() {
        return Product::orderBy('in_stock')->where('in_stock','>',0)->get();
    }

    public static function getGreatDeals() {
        return Product::get()->random(4);
    }

    //-----------------------------------------------------
    // Category routes
    //-----------------------------------------------------

    public static function showComputers() {
        $products = Product::where('category', 'Computer')->get();

        return view('products.list', [
            'title' => 'Computers',
            'products' => $products
        ]);
    }

    public static function showComputerComponents() {
        $products = Product::where('category', 'Computer component')->get();

        return view('products.list', [
            'title' => 'Computer components',
            'products' => $products
        ]);
    }

    public static function showMonitors() {
        $products = Product::where('category', 'Monitor')->get();

        return view('products.list', [
            'title' => 'Monitors',
            'products' => $products
        ]);
    }

    public static function showNotebooks() {
        $products = Product::where('category', 'Notebook')->get();

        return view('products.list', [
            'title' => 'Notebooks',
            'products' => $products
        ]);
    }

    public static function showTablets() {
        $products = Product::where('category', 'Tablet')->get();

        return view('products.list', [
            'title' => 'Tablets',
            'products' => $products
        ]);
    }

    public static function showTabletAccessories() {
        $products = Product::where('category', 'Tablet accessory')->get();

        return view('products.list', [
            'title' => 'TV accessories',
            'products' => $products
        ]);
    }

    public static function showPrinters() {
        $products = Product::where('category', 'Printer')->get();

        return view('products.list', [
            'title' => 'Printers',
            'products' => $products
        ]);
    }

    public static function showPrinterProps() {
        $products = Product::where('category', 'Printer prop')->get();

        return view('products.list', [
            'title' => 'Printer props',
            'products' => $products
        ]);
    }


    public static function showPrinterComponents() {
        $products = Product::where('category', 'Printer component')->get();

        return view('products.list', [
            'title' => 'Printer components',
            'products' => $products
        ]);
    }

    public static function showSmartphones() {
        $products = Product::where('category', 'Smart Phone')->get();

        return view('products.list', [
            'title' => 'Smartphones',
            'products' => $products
        ]);
    }


    public static function showLandlinePhones() {
        $products = Product::where('category', 'Landline')->get();

        return view('products.list', [
            'title' => 'Landline phones',
            'products' => $products
        ]);
    }

    public static function showClassicPhones() {
        $products = Product::where('category', 'classicphone')->get();

        return view('products.list', [
            'title' => 'Classic phones',
            'products' => $products
        ]);
    }

    public static function showTelevisions() {
        $products = Product::where('category', 'television')->get();

        return view('products.list', [
            'title' => 'Televisions',
            'products' => $products
        ]);
    }

    public static function showTvAccessories() {
        $products = Product::where('category', 'tvaccessory')->get();

        return view('products.list', [
            'title' => 'TV accessories',
            'products' => $products
        ]);
    }

    public static function showPhoto() {
        $products = Product::where('category', 'photo')->get();

        return view('products.list', [
            'title' => 'Photo, video',
            'products' => $products
        ]);
    }

    public static function showMedia() {
        $products = Product::where('category', 'media')->get();

        return view('products.list', [
            'title' => 'Media',
            'products' => $products
        ]);
    }

    public static function showDrones() {
        $products = Product::where('category', 'Drone')->get();

        return view('products.list', [
            'title' => 'Drones',
            'products' => $products
        ]);
    }

    public static function showKitchenAppliances() {
        $products = Product::where('category', 'Kitchen equipment')->get();

        return view('products.list', [
            'title' => 'Kitchen appliances',
            'products' => $products
        ]);
    }

    public static function showSmarthomeDevices() {
        $products = Product::where('category', 'Smarthome device')->get();

        return view('products.list', [
            'title' => 'Smart home devices',
            'products' => $products
        ]);
    }

    public static function showHomeAccessories() {
        $products = Product::where('category', 'Home accessory')->get();

        return view('products.list', [
            'title' => 'Home accessories',
            'products' => $products
        ]);
    }




    



}
