<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ellora Official</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Home -->
    <section id="" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div>{{ $product->nama }}</div>
                    <div>{{ $product->kode }}</div>
                    <div>{{ $product->deskripsi }}</div>
                    <div>{{ $product->harga }}</div>
                    <div>{{ $product->ukuran }}</div>
                    <div>{{ $product->bahan }}</div>
                    <div>{{ $product->perawatan }}</div>
                    <div>{{ $product->shopee }}</div>
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#viewDetailModal">
                        View Detail
                    </button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
