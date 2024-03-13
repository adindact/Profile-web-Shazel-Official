<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function showReviewForm()
    {
        return view('review');
    }

    public function submitReview(Request $request)
    {
        // Proses penyimpanan review ke dalam database atau penyimpanan file gambar/video, dll.
        // Implementasikan logika penyimpanan review di sini.
        // Setelah itu, bisa redirect ke halaman lain atau menampilkan pesan sukses.
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
