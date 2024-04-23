<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | Ellora Official</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/review.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
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
                                <img src="./assets/images/profil.jpeg" alt="Foto Profil Pengguna"
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
                                @if ($data->images)
                                    <div class="col">
                                        <img src="{{ asset('images/' . $data->images) }}" alt="Bukti Testimoni"
                                            class="testimony">
                                    </div>
                                @endif

                                @if ($data->video)
                                    <div class="col">
                                        <img src="{{ asset('video/' . $data->video) }}" alt="Bukti Testimoni"
                                            class="testimony">
                                    </div>
                                @endif
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

    @include('layouts.floating')
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
