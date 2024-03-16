<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review; // Gantilah Review dengan model Anda

class CRUDReviewController extends Controller
{
    public function submitReview(Request $request)
    {
        // Validation (replace with your validation rules)
        $this->validate($request, [
            'review_text' => 'required|string',
        ]);

        // Save review data
        $review = new Review();
        $review->user_id = auth()->id();
        $review->product_id = $request->product_id; // Sesuaikan dengan nama field yang digunakan di form
        $review->review_text = $request->review_text;
        
        // Check if clickedStars is not null before using count
        $clickedStars = $request->clickedStars;
        if ($clickedStars !== null) {
            $review->rating = count($clickedStars);
        } else {
            // Handle case when clickedStars is null
            $review->rating = 0; // Or any default value you prefer
        }

        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
