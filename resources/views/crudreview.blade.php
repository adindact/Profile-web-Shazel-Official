<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | Shazel Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/crudreview.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navbar -->
    @include('layouts.navbar')
    
    <div class="containerreview">
        <h1>Tambahkan Review</h1>
        <form action="{{ route('submit.crudreview') }}" method="POST">
            @csrf
            <h2 class="review_text">Kualitas Produk</h2>
            <div class="rating-stars">
                <i class="bi bi-star-fill" title="1 stars"></i>
                <i class="bi bi-star-fill" title="2 stars"></i>
                <i class="bi bi-star-fill" title="3 stars"></i>
                <i class="bi bi-star-fill" title="4 stars"></i>
                <i class="bi bi-star-fill" title="5 star"></i>
            </div>
            <div class="form-upload-pictures">
                <img src="./assets/images/addphoto.png" alt="Add Photo" id="image-upload-button">
                <label for="image">Tambahkan Gambar</label>
            </div>
            <div class="form-upload-videos">
                <img src="./assets/images/addvideo.png" alt="Add Video" id="video-upload-button">
                <label for="video">Tambahkan Video</label>
            </div>
            <textarea name="review_text" id="review_text" rows="4" required placeholder="Bagikan pengalamanmu dengan produk ini..."></textarea>
            <button type="submit">Kirim Penilaian</button>
        </form>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/crudreview.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>