<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

class ReviewController extends Controller
{
    //
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function createReview()
    {
        return view('createReview');
    }

    public function processCreateReview(Request $request)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'review_text' => 'required',
            'rating' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk gambar
            'video' => 'nullable|mimes:mp4,webm,ogg|max:20000', // tambahkan validasi untuk video (20 MB maksimum)
        ]);

        // Simpan data ke database
        $review = new Review;
        $review->id = Auth::id(); // Mengambil ID pengguna yang sedang login
        $review->review_text = $request->review_text;
        $review->rating = $request->rating;

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $review->image = $imagePath;
        }

        // Upload video jika ada
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
            $review->video = $videoPath;
        }

        $review->save();

        return redirect()->route('showReview');
    }
    public function showReview()
    {
        // Mengambil semua review
        $reviews = Review::all();

        // Mengambil semua pengguna (users) untuk menghindari pengecekan berulang
        $users = User::all()->keyBy('id');

        // Melooping semua review untuk menetapkan nama pengguna
        foreach ($reviews as $review) {
            // Memeriksa apakah pengguna dengan ID review ditemukan
            if (isset ($users[$review->id])) {
                // Menetapkan nama pengguna ke dalam properti baru pada objek review
                $review->username = $users[$review->id]->name;
            } else {
                // Jika pengguna tidak ditemukan, menetapkan nilai default atau melakukan penanganan lain sesuai kebutuhan
                $review->username = 'Unknown'; // Nilai default jika pengguna tidak ditemukan
            }
        }

        // Mengirimkan data review dan pengguna ke view
        return view('review', ['reviews' => $reviews, 'users' => $users]);
    }
}
