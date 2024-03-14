<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDReviewController extends Controller
{
    public function submitReview(Request $request)
    {
        // Validation (replace with your validation rules)
        $this->validate($request, [
            'review_text' => 'required|string',
        ]);

        // Save review data (replace with your logic to save review data)
        $review = [
            'user_id' => auth()->id(), // Assuming you have a user logged in
            'product_id' => $request->get('product_id'), // Assuming you have product_id field
            'rating' => count($request->get('clickedStars')), // Assuming clickedStars holds selected rating
            'review_text' => $request->get('review_text'),
        ];

        // Logic to store the review in database
        // ...

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
