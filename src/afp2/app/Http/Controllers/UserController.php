<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'temp' => 'Temp try.',
        ]);
    }

    public function register() {
        return view('users.register');
    }

    public function login(Request $request) {
        $alert = 0;
        if($request->has('P')) {
            $alert = 1;
        }
        return view('users.login', [
            "alert" => $alert
        ]);
    }

    public function profile() {
        return view('users.profile',[
            "user" => Auth::user()
        ]);
    }

    public function listUsers(){

        return view('users.userList',[
            "users" => User::all()
        ]);
    }

    public function logout(Request $request) {  
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function save(Request $request){ 

        $this->validateInputs($request);

        $this->saveUser($request);

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

    public function saveUser(Request $request) {

        $billingAddress = $this->saveBillingAddress($request);

        if($request->has("shippingAddress")) {
            $shippingAddress = $this->saveShippingAddress($request);
        }
        else {
            $shippingAddress = $billingAddress;
        }

        User::create([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'birthdate' => now(),
            'billing_address' => $billingAddress,
            'shipping_address' => $shippingAddress
        ]);

        return view('users.successfulRegistration');

    }
    
    public function saveBillingAddress(Request $request) {
        $address = Address::create([
            'country' => $request->input('bcountry'),
            'post_code' => $request->input('bpost_code'),
            'city' => $request->input('bcity'),
            'street' => $request->input('bstreet'),
            'house' => $request->input('bhouse'),
            'note' => $request->input('note')
        ]);

        return $address->id;

    }

    public function saveShippingAddress(Request $request) {
        $address = Address::create([
            'country' => $request->input('scountry'),
            'post_code' => $request->input('spost_code'),
            'city' => $request->input('scity'),
            'street' => $request->input('sstreet'),
            'house' => $request->input('shouse'),
            'note' => $request->input('note')
        ]);
        
        return $address->id;

    }


    

}
