<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class CRUDReviewController extends Controller
{
    public function submitReview(Request $request)
    {
        // Validasi (ganti dengan aturan validasi Anda)
        $this->validate($request, [
            'review_text' => 'required|string',
            'clickedStars' => 'required|array', // Pastikan ini merupakan array
            'clickedStars.*' => 'integer|between:1,5', // Setiap bintang harus di antara 1 dan 5
        ]);

        // Simpan data review
        $review = new Review();
        $review->user_id = auth()->id();
        $review->product_id = $request->product_id; // Sesuaikan dengan nama field yang digunakan di form
        $review->review_text = $request->review_text;
        $review->rating = count($request->clickedStars);

        $review->save();

        return redirect()->back()->with('success', 'Review berhasil dikirim!');
    }
}
