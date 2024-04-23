<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top: 70px;" id="hero">
        <div class="container">
          <div class="row">
              <div class="card " data-aos="zoom-in">
                <form method="POST" action="{{ route('admin.prosesUpdateProduct', ['kode' => $product->kode]) }}" enctype="multipart/form-data">
                      <div style="padding-top: 10px;">
                      @method('PATCH')
                      @csrf
                      <div style="max-width: 600px; margin: 0 auto;">
                        <table class="pt-5" style="width: 100%;">
  
                          <tr>
                            <td><label for="nama">Nama Produk:</label></td>
                            <td><input type="text" id="nama" name="nama" value="{{ old('nama') ?? $product->nama }}" required style="margin-bottom: 10px;" ></td>
                          </tr>
                          <tr>
                            <td><label for="image" class="form-label">Gambar Produk:</label></td>
                            <td>
                              @if($product->image)
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="Image" style="max-width: 200px; margin-top: 10px;">
                                @endif
                                <input class="form-control" type="file" id="image" name="image">
                                
                            </td>
                        </tr>
                        
                        
                          <tr>
                            <td><label for="deskripsi">Deskripsi Produk:</label></td>
                            <td><textarea id="deskripsi" name="deskripsi" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ old('deskripsi') ?? $product->deskripsi }}</textarea></td>
                          </tr>
                          <tr>
                            <td><label for="harga">Harga Produk:</label></td>
                            <td><input type="number" id="harga" name="harga" value="{{ old('harga') ?? $product->harga }}" style="width: 100%;  margin-bottom: 10px;"></input></td>
                          </tr>
                          <tr>
                            <td><label for="ukuran">Ukuran Produk:</label></td>
                            <td><textarea id="ukuran" name="ukuran" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ old('ukuran') ?? $product->ukuran }}</textarea></td>
                          </tr>
                          <tr>
                            <td><label for="bahan">bahan Produk:</label></td>
                            <td><textarea id="bahan" name="bahan" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ old('bahan') ?? $product->bahan }}</textarea></td>
                          </tr>
                          <tr>
                            <td><label for="perawatan">Perawatan Produk:</label></td>
                            <td><textarea id="perawatan" name="perawatan" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ old('perawatan') ?? $product->perawatan }}</textarea></td>
                          </tr>
                          <tr>
                            <td><label for="shopee">Link Shopee:</label></td>
                            <td><input type="url" id="shopee" name="shopee" value="{{ old('shopee') ?? $product->shopee }}" style="width: 100%; margin-bottom: 10px;"></url></td>
                          </tr>
                          <tr>
                            <td><label for="kode">Kode Produk:</label></td>
                            <td><input type="number" id="kode" name="kode" value="{{ old('kode') ?? $product->kode }}" style="width: 100%;  margin-bottom: 10px;"></input></td>
                          </tr>
                          
                        </table>
                      </div>
                      </div>
                      <div class="pt-3 pb-3 d-flex justify-content-center">
                          <button class="btn btn-primary" type="submit">Simpan</button>
                      </div>
                    </form>
              </div>
          </div>
        </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>