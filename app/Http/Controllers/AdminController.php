<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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

    // public function processCreateProduct(Request $request)
    // {
    //     // Validasi inputan form
    //     $validatedData = $request->validate([
    //         'kode' => 'required',
    //         'nama' => 'required',
    //         'deskripsi' => 'required',
    //         'harga' => 'required',
    //         'shopee' => 'required',
    //         'tokopedia' => 'required',
    //         'image' => 'required|image|max:2048',
    //     ]);

    //     Product::create($validatedData);

    //     return "Data berhasil disimpan ke database";

    // // Simpan data ke database
    // $product = new Product;
    // $edukasi->materi = $request->materi;
    // $edukasi->judul = $request->judul;
    // $edukasi->paragraf1 = $request->paragraf1;
    // $edukasi->paragraf2 = $request->paragraf2;
    // $edukasi->paragraf3 = $request->paragraf3;
    // $edukasi->paragraf4 = $request->paragraf4;
    // $edukasi->paragraf5 = $request->paragraf5;

    // // Upload gambar jika ada
    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('post-images', 'public');
    //     $validatedData['image'] = $imagePath;

    // }
    // $edukasi->image = $validatedData['image'];

    // $edukasi->save();

    // // Redirect atau melakukan tindakan lainnya setelah menyimpan ke database
    // return redirect()->route('aEdukasi');
    // }

    public function processCreateProduct(Request $request)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'shopee' => 'required',
            'tokopedia' => 'required',
            'image' => 'required|image|max:2048',
        ]);

    // Simpan data ke database
    $product = new Product;
    $product->nama = $request->nama;
    $product->deskripsi = $request->deskripsi;
    $product->harga = $request->harga;
    $product->shopee = $request->shopee;
    $product->tokopedia = $request->tokopedia;
    $product->kode = $request->kode;


    // Upload gambar jika ada
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('post-images', 'public');
        $validatedData['image'] = $imagePath;

    }
    $product->image = $validatedData['image'];

    $product->save();

    return "Data berhasil disimpan ke database";
    }

    
    
    public function showProduct(){
        $product = Product::all();
        
        return view('product', compact('product'));
        
    }
}