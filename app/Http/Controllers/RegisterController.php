<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function viewRegister() {
        return view('auth.register');
    }

    public function doRegister(Request $request) {

        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|max:255',
            // 'usertype' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'phone' => $request->number,
            'type' => $request->usertype,
            'password' => Hash::make($request->password),
        ]); 
        
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('welcome');
    }
}
