<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | Shazel Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <section class="row justify-content-center review-section">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mb-4">
                    <div class="card-body">
                        {{-- Profile Pengguna --}}
                        <div class="profile-info">
                            <!-- Foto profil pengguna -->
                            <img src="./assets/images/avatar-2.jpg" alt="Foto Profil Pengguna" class="profile-picture">
                            <!-- Nama pengguna -->
                            <div class="user-info">
                                <h4>Nama Pengguna</h4>
                                <!-- Rating -->
                                <div class="ratings">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bukti testimoni -->
                        <br>
                        <img src="./assets/images/testimoni.png" alt="Bukti Testimoni" class="testimony">
                        <!-- Ulasan -->
                        <br>
                        <p>“Gelang manik-manik kaya gini cocok banget untuk di pake sehario hari ... cantik banget untuk outfit apa aja”</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mb-4">
                    <div class="card-body">
                        {{-- Profile Pengguna --}}
                        <div class="profile-info">
                            <!-- Foto profil pengguna -->
                            <img src="./assets/images/avatar-2.jpg" alt="Foto Profil Pengguna" class="profile-picture">
                            <!-- Nama pengguna -->
                            <div class="user-info">
                                <h4>Nama Pengguna</h4>
                                <!-- Rating -->
                                <div class="ratings">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                    <img src="./assets/images/StarSelected.png" alt="Bintang Rating" class="rating">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bukti testimoni -->
                        <br>
                        <img src="./assets/images/testimoni.png" alt="Bukti Testimoni" class="testimony">
                        <!-- Ulasan -->
                        <br>
                        <p>“Gelang desain seperti ini yang aku cari.“</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Button untuk menambahkan review -->
        <button onclick="window.location.href='{{ url('/crudreview') }}'" type="button">Tambahkan Review</button>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/review.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>