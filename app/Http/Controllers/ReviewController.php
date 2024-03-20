<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            // sesuaikan dengan aturan validasi yang dibutuhkan
        ]);

        // Simpan data review
        Review::create([
            // sesuaikan dengan nama kolom pada model Review
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'review_text' => $request->review_text,
            'rating' => $request->rating,
            'image' => $request->image,
            'video' => $request->video,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review berhasil ditambahkan.');
    }

}
