<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ellora Official</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
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

                <!-- Modal for View Detail -->
                {{-- <div class="modal fade" id="viewDetailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama }} Detail</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Tampilkan detail produk di sini -->
                                <div>{{ $data->nama }}</div>
                                <div>{{ $data->kode }}</div>
                                <div>{{ $data->deskripsi }}</div>
                                <div>{{ $data->harga }}</div>
                                <div>{{ $data->shopee }}</div>
                                <div>{{ $data->tokopedia }}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div> --}}

        </div>
    </section>


    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>