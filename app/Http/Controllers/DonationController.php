<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function viewDonation() {
        return view('layout.donation');
    }

    public function storeDonation(Request $request) {
        $this->validate($request, [
            'quantity' => 'required|max:255',
            'message' => 'required|max:255',
        ]);

        Food::create([
            'quantity' => $request->quantity,
            'type' => $request->foodtype,
            'description' => $request->message,
        ]);

        return redirect()->route('welcome');
    }
}
