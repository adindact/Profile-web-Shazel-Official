<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Review | Ellora Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/crudreview.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Success message alert -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="containercrud">
        <section class="row justify-content-center">
            <div class="col-lg-8">
                <div class="containerreview">
                    <h1>Tambahkan Review</h1>
                    <form action="{{ route('CreateReview') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class="review_text">Kualitas Produk</h2>
                        {{-- <tr>
                            <td><label for="rating">Rating:</label></td>
                            <td>
                                <div class="rating-stars">
                                    <!-- Rating stars images -->
                                    <img src="./assets/images/Star.png" alt="1 stars" data-value="1">
                                    <img src="./assets/images/Star.png" alt="2 stars" data-value="2">
                                    <img src="./assets/images/Star.png" alt="3 stars" data-value="3">
                                    <img src="./assets/images/Star.png" alt="4 stars" data-value="4">
                                    <img src="./assets/images/Star.png" alt="5 stars" data-value="5">
                                </div>
                                <input type="hidden" id="rating" name="rating" value="0">
                                <!-- Nilai rating akan disimpan di sini -->
                            </td>
                        </tr> --}}
                        <tr>
                            <td><label for="rating">Rating:</label></td>
                            <td>
                                <div class="rating-stars">
                                    <!-- Rating stars images -->
                                    <img src="./assets/images/Star.png" alt="1 stars" data-value="1">
                                    <img src="./assets/images/Star.png" alt="2 stars" data-value="2">
                                    <img src="./assets/images/Star.png" alt="3 stars" data-value="3">
                                    <img src="./assets/images/Star.png" alt="4 stars" data-value="4">
                                    <img src="./assets/images/Star.png" alt="5 stars" data-value="5">
                                </div>
                            </td>
                        </tr>
                        <!-- Hidden input to store selected stars -->
                        <input type="hidden" name="rating" id="rating" value="">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-upload-pictures">
                                    <!-- Add photo button -->
                                    <img src="./assets/images/addphoto.png">
                                    <input class="form-control" type="file" id="image" name="image"
                                        style=" margin-bottom: 10px;">
                                    <label for="image" id="image" name="image">Tambahkan Gambar</label>
                                </div>
                                <tr>
                                    <td></td>
                                </tr>
                            </div>
                            <div class="col-md-6">
                                <div class="form-upload-videos">
                                    <!-- Add video button -->
                                    <img src="./assets/images/addvideo.png">
                                    <input class="form-control" type="file" id="video" name="video"
                                        style=" margin-bottom: 10px;">
                                    <label for="video" id="video" name="video">Tambahkan Video</label>
                                </div>
                            </div>
                        </div>
                        <div class="row2 justify-content-center">
                            <div class="col-md-12">
                                <!-- Textarea for review text -->
                                <textarea name="review_text" id="review_text" rows="4" required
                                    placeholder="Bagikan pengalamanmu dengan produk ini..."></textarea>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button href='{{ route('showReview') }}' type="submit">Kirim Penilaian</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="./assets/js/crudreview.js"></script>
    <!-- App JS -->
    <script src="./assets/js/app.js"></script>
    <!-- Di bagian bawah halaman blade template Anda -->
    <script>
        const processCreateReviewURL = "{{ route('CreateReview') }}";
        const showReviewURL = "{{ route('showReview') }}";
    </script>
    <script>
        document.querySelectorAll('.rating-stars img').forEach(star => {
            star.addEventListener('click', function() {
                const ratingValue = parseInt(this.getAttribute(
                'data-value')); // Ambil nilai rating dari atribut data-value

                // Set nilai rating pada input tersembunyi
                document.getElementById('rating').value = ratingValue;

                // Reset semua bintang menjadi warna default
                document.querySelectorAll('.rating-stars img').forEach(star => {
                    star.src =
                    "./assets/images/Star.png"; // Mengembalikan semua bintang ke bentuk aslinya
                });

                // Beri warna ke bintang-bintang sebelum dan termasuk bintang saat ini
                for (let i = 0; i < ratingValue; i++) {
                    document.querySelectorAll('.rating-stars img')[i].src =
                        "./assets/images/StarSelected.png"; // Mengubah gambar bintang yang diklik
                }
            });
        });
    </script>


</body>

</html>
