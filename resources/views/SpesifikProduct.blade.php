<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  @include('layouts.navbar')

  <section id="" class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div>Nama: {{ $product->nama }}</div> <br>
                <div>Deskripsi: {{ $product->deskripsi }}</div> <br>
                <div>Harga: {{ $product->harga }}</div> <br>
                <div>Ukuran: {{ $product->ukuran }}</div> <br>
                <div>Bahan: {{ $product->bahan }}</div> <br>
                <div>Perawatan: {{ $product->perawatan }}</div> <br>
                <div>Kode: {{ $product->kode }}</div> <br>
                <div>
                    <a href="{{ $product->shopee }}">
                        <img src="{{ asset('assets/images/shopee.png') }}" alt="Shopee" style="width: 50px; height: 50px; border-radius: 50%;">
                    </a>
                </div>                    

            </div>
            
        </div>

        
    </div>
</section>  

  @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>