<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function crud(){
        return view('admin');
    }
    public function createProduct(){
        return view('createProduct');
    }
    public function processCreateProduct(Request $request){
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
    $product = new Product;
    $product->nama = $request->nama;
    $product->deskripsi = $request->deskripsi;
    $product->harga = $request->harga;
    $product->ukuran = $request->ukuran;
    $product->bahan = $request->bahan;
    $product->perawatan = $request->perawatan;
    $product->shopee = $request->shopee;
    $product->kode = $request->kode;
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
    public function updateProduct(Product $product){
        return view('updateProduct', ['product' => $product]);
    }
    public function processUpdateProduct(Request $request){
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
            'image' => 'image|max:5048',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $request->image->path());

            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = str_replace('public/', '', $imagePath);
        }

        $product = Product::where('kode', $validatedData['kode'])->first();
        $product->update($validatedData);
        return redirect()->route('admin.ShowProduct', ['product' => $product]);
    }

    public function deleteProduct(Product $product){
        $product->delete();
        return redirect()->route('admin.ShowProduct');
    }
    public function deleteUsers(User $users){
        $users->delete();
        return redirect()->route('admin.ShowUsers');
    }
}