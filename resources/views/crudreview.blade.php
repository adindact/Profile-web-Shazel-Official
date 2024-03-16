<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | Shazel Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/crudreview.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navbar -->
    @include('layouts.navbar')
    
    <!-- Success message alert -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="containercrud">
        <section class="row justify-content-center">
            <div class="col-lg-8">
                <div class="containerreview">
                    <h1>Tambahkan Review</h1>
                    <form action="{{ route('submit.crudreview') }}" method="POST">
                        @csrf
                        <h2 class="review_text">Kualitas Produk</h2>
                        <div class="rating-stars">
                            <img src="./assets/images/Star.png" alt="1 stars" data-value="1">
                            <img src="./assets/images/Star.png" alt="2 stars" data-value="2">
                            <img src="./assets/images/Star.png" alt="3 stars" data-value="3">
                            <img src="./assets/images/Star.png" alt="4 stars" data-value="4">
                            <img src="./assets/images/Star.png" alt="5 stars" data-value="5">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-upload-pictures">
                                    <img src="./assets/images/addphoto.png" alt="Add Photo" id="image-upload-button">
                                    <label for="image">Tambahkan Gambar</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-upload-videos">
                                    <img src="./assets/images/addvideo.png" alt="Add Video" id="video-upload-button">
                                    <label for="video">Tambahkan Video</label>
                                </div>
                            </div>
                        </div>
                        <div class="row2 justify-content-center">
                            <div class="col-md-12">
                                <textarea name="review_text" id="review_text" rows="4" required placeholder="Bagikan pengalamanmu dengan produk ini..."></textarea>
                            </div>
                        </div>
                        <button type="submit">Kirim Penilaian</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/crudreview.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>