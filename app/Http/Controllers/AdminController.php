<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
    public function crud()
    {
        return view('admin');
    }

    public function createProduct()
    {
        return view('createProduct');
    }




    public function processCreateProduct(Request $request)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'ukuran' => 'required',
            'bahan' => 'required',
            'perawatan' => 'required',
            'shopee' => 'required',
            'image' => 'required|image|max:5048',
        ]);


    // Simpan data ke database
    $product = new Product;
    $product->nama = $request->nama;
    $product->deskripsi = $request->deskripsi;
    $product->harga = $request->harga;
    $product->ukuran = $request->ukuran;
    $product->bahan = $request->bahan;
    $product->perawatan = $request->perawatan;
    $product->shopee = $request->shopee;
    $product->kode = $request->kode;


    // Upload gambar jika ada
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('post-images', 'public');
        $validatedData['image'] = $imagePath;

    }
    $product->image = $validatedData['image'];

    $product->save();
    Return redirect()->route('showProduct');
    }



    public function showProduct(){
    $product = Product::all();
    return view('product', ['product' => $product]);
    }


    public function showOneProduct(Product $product) {
        return view('spesifikProduct', ['product' => $product]);
    }


    public function adminShowProduct(){
        $product = Product::all();
        return view('dataProduct', ['product' => $product]);
    }
    public function adminShowUsers(){
        $users = User::all();
        return view('dataUsers', ['users' => $users]);
    }
    public function adminShowReviews(){
        $reviews = Review::all();
        return view('dataReview', ['reviews' => $reviews]);
    }

    public function updateProduct(Product $product){
        return view('updateProduct', ['product' => $product]);
    }

    public function processUpdateProduct(Request $request)
{
    // Validasi data yang dikirimkan oleh formulir
    $validatedData = $request->validate([
        'kode' => 'required',
        'nama' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required',
        'ukuran' => 'required',
        'bahan' => 'required',
        'perawatan' => 'required',
        'shopee' => 'required',
        'image' => 'image|max:5048', // Gambar bersifat opsional
    ]);

    // Peroleh produk yang akan diperbarui
    $product = Product::where('kode', $validatedData['kode'])->first();

    // Jika ada gambar yang diunggah, simpan gambar baru
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        Storage::delete('public/' . $product->image);

        // Simpan gambar baru di lokasi yang sama dengan gambar pertama kali dibuat
        $imagePath = $request->file('image')->store('post-images', 'public');
        $validatedData['image'] = $imagePath;
    } else {
        // Jika tidak ada gambar baru yang diunggah, gunakan gambar yang sudah ada
        $validatedData['image'] = $product->image;
    }

    // Update data produk dengan data yang baru divalidasi
    $product->update($validatedData);

    return redirect()->route('showProduct');
}


    public function deleteProduct(Product $product)
    {
        // Hapus gambar terkait jika ada
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }

        // Hapus data produk dari basis data
        $product->delete();

        return redirect()->route('admin.ShowProduct');
    }

    public function deleteUsers(User $users){
        $users->delete();
        return redirect()->route('admin.ShowUsers');
    }
    public function deleteReviews(Review $reviews){
        $reviews->delete();
        return redirect()->route('admin.ShowReviews');
    }
}
