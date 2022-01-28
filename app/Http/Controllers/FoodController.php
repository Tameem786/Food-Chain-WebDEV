<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function viewFood() {
        $foods = Food::get();

        return view('layout.food', [
            'foods' => $foods
        ]);
    }
}
