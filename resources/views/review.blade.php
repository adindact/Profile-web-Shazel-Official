<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | Ellora Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/review.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navbar -->
    @include('layouts.navbar')
    <div class="containerreview">
        <section class="py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-center">Review</h1>
                </div>
            </div>
        </section>
        @foreach ($reviews as $data)
            <section class="row justify-content-center review-section">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            {{-- Profile Pengguna --}}
                            <div class="profile-info">
                                <!-- Foto profil pengguna -->
                                <img src="./assets/images/avatar-2.jpg" alt="Foto Profil Pengguna"
                                    class="profile-picture">
                                <!-- Nama pengguna -->
                                <div class="user-info">
                                    @php
                                        $data->name = $users[$data->id]->name;
                                    @endphp
                                    <h4>{{ $data->name }}</h4>
                                    <!-- Rating -->
                                    <div class="ratings">
                                        @for ($i = 1; $i <= $data->rating; $i++)
                                            <img src="./assets/images/StarSelected.png" alt="Bintang Rating"
                                                class="rating">
                                        @endfor
                                        @for ($i = $data->rating + 1; $i <= 5; $i++)
                                            <img src="./assets/images/Star.png" alt="Bintang Rating" class="rating">
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <!-- Bukti testimoni -->
                            <br>
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('images/' . $data->images) }}" alt="Bukti Testimoni"
                                        class="testimony">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('video/' . $data->video) }}" alt="Bukti Testimoni"
                                        class="testimony">
                                </div>
                            </div>
                            <!-- Ulasan -->
                            <br>
                            <p>{{ $data->review_text }}</p>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <!-- Button untuk menambahkan review -->
        <a href="/crudreview" class="btn btn-review" role="button">Tambahkan Review</a>
    </div>



    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/review.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
