<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{

    public function store(Request $request)
    {
        // Validate the product exists and user hasn't already reviewed it
        $validated = $request->validate([
            'product_id' => [
                'required',
                'exists:products,id',
                function ($attribute, $value, $fail) {
                    $existingReview = Review::where('user_id', auth()->id())
                        ->where('product_id', $value)
                        ->exists();
                    
                    if ($existingReview) {
                        $fail('You have already reviewed this product.');
                    }
                },
            ],
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|min:20|max:1000',
        ]);

        try {
            DB::beginTransaction();

            $review = auth()->user()->reviews()->create([
                'product_id' => $validated['product_id'],
                'rating' => $validated['rating'],
                'comment' => strip_tags($validated['comment']), // Sanitize HTML
            ]);

            DB::commit();
            return back()->with('success', 'Review submitted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Review submission failed: ' . $e->getMessage());
            return back()
                ->with('error', 'Failed to submit review. Please try again.')
                ->withInput();
        }
    }
} 