<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewUser() {
        $users = User::get();

        return view('layout.users', [
            'users' => $users,
        ]);
    }

    public function deleteFood($request) {
        Food::where('id', $request)->delete();

        return back();
    }
}
