<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function authenticate(Request $request) {

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register() {
        return view('users.register');
    }

    public function login() {
        return view('users.login');
    }

    public function logout(Request $request) {  
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function store(Request $request){  
        validateInputs($reuqest);
        storeUser($request);
    }

    public function validateInputs(Request $request) { 
        $rules = [
            'username' => ['required'],
            'password' => ['required', 'min:8'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'birthdate' => ['required'],
            
            'bcountry' => ['required'],
            'bpost_code' => ['required'],
            'bcity' => ['required'],
            'bstreet' => ['required'],
            'bhouse' => ['required']
        ];

        if($request->has('sadress')) {
            $rules += [
                'scountry' => ['required'],
                'spost_code' => ['required'],
                'scity' => ['required'],
                'sstreet' => ['required'],
                'shouse' => ['required']
            ];
        }

        $request->validate($rules);
    }

    public function storeUser(Request $request) {

        $billingAddress = storeBillingAddress($request);

        if($request.has("shippingAddress")) {
            $shippingAddress = storeShippingAddress($request);
        }
        else {
            $shippingAddress = $billingAddress;
        }

        User::create([
            'username' => $request('username'),
            'password' => $request('password'),
            'first_name' => $request('first_name'),
            'last_name' => $request('last_name'),
            'email' => $request('email'),
            'birthdate' => $request('birthdate'),
            'billing_address' => $billingAddress,
            'shipping address' => $shippingAddress
        ]);

    }
    
    public function storeBillingAddress(Request $request) {
        $address = Address::create([
            'country' => $request('bcountry'),
            'post_code' => $request('bpost_code'),
            'city' => $request('bcity'),
            'street' => $request('bstreet'),
            'house' => $request('house'),
            'note' => $request('note')
        ]);

        return $address;

    }

    public function storeShippingAddress(Request $request) {
        $address = Address::create([
            'country' => $request('bcountry'),
            'post_code' => $request('bpost_code'),
            'city' => $request('bcity'),
            'street' => $request('bstreet'),
            'house' => $request('house'),
            'note' => $request('note')
        ]);
        
        return $address;

    }


    

}
