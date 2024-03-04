<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shazel Official</title>
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
    <section id="home" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex">
                    @foreach ($product as $data)
                        <div class="px-1 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="row">
                                <div class="project background-items-catalog " style="width:250px; height: 250px">
                                    <img src="{{ asset('storage/' . $data->image) }} " alt="">
                                    <div class="row">

                                        <div class="col colapse button-price">
                                            <div class="content">
                                                <a href="./assets/images/p-5.jpg" data-fancybox="gallery"
                                                    class="btn btn-outline-light">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex " style="padding-top: 275px;">
                                <div class=" text-center">
                                    <div class="">
                                        {{ $data->nama }}
                                    </div>
                                    <div class="">
                                        {{ $data->harga }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
