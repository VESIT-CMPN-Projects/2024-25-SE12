<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'location' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'transaction_id' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'is_anonymous' => 'nullable|boolean',
        ]);

        // Store the donation data in the database
        $donation = Donation::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'amount' => $request->amount,
            'transaction_id' => $request->transaction_id,
            'message' => $request->message,
            'is_anonymous' => $request->has('is_anonymous'),
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Thank you for your donation!');
    }
}