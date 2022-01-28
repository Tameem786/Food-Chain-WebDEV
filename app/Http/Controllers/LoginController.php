<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function viewLogin() {
        return view('auth.login');
    }

    public function doLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        if(auth()->user()->type == 'admin') {
            return redirect()->route('admin');
        }
        
        return redirect()->route('welcome');
    }
}
