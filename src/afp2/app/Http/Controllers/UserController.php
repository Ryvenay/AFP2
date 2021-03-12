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

    


    public function getBillingAddress(Request $request) {
            
    }



    

}
