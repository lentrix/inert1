<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return inertia("Home");
    }

    public function items() {
        return inertia("Items");
    }

    public function loginForm() {
        return view('login');
    }

    public function login(Request $request) {

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            dd("Invalid username");
        }


        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/');

    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
