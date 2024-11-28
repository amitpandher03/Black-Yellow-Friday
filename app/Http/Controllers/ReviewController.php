<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        \Log::info('Received rating:', ['rating' => $request->rating]);
        
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|min:20',
        ]);

        $review = auth()->user()->reviews()->create($validated);


        return back()->with('success', 'Review submitted successfully!');   
    }

} 