<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Shazel Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/review.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navbar -->
    @include('layouts.navbar')
    
    <div class="containerreview">
    <h1>Product Reviews</h1>
        <!-- Form untuk memberikan review -->
        <h1>Product Reviews</h1>
        <!-- Form untuk memberikan review -->
        <form action="{{ route('submit.review') }}" method="POST">
            @csrf
            <label for="review_text">Review:</label>
            <textarea name="review_text" id="review_text" rows="4" required></textarea>
            <label for="image">Image/Video:</label>
            <input type="file" name="image" id="image">
            <div class="rating-stars">
                <i class="bi bi-star-fill" title="5 stars"></i>
                <i class="bi bi-star-fill" title="4 stars"></i>
                <i class="bi bi-star-fill" title="3 stars"></i>
                <i class="bi bi-star-fill" title="2 stars"></i>
                <i class="bi bi-star-fill" title="1 star"></i>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>