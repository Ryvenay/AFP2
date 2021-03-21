<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function show() {
        return view('home', [
            'newItems' => ProductController::getNewProducts()->take(4),
            'fewLeft' => ProductController::getFewLeft()->take(4),
            'greatDeals' => ProductController::getGreatDeals()->take(4)
        ]);
    }
}

