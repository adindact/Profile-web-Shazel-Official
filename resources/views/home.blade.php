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
    <section id="home" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row text-home">
                <div class="col-md-6 text-home-left">
                    <div class="display-2 fw-bold text-hi" data-aos="fade-up">Hi! We’re Ellora </div>
                    <h1 class="text-brand" data-aos="fade-up">Handmade Beads Bracelet </h1>
                    <div data-aos="fade-up" data-aos-delay="100" class="mt-3 mb-5 text-slogan">Ellora dengan semangat
                        kreatif dengan gelang manik-manik yang casual.</div>
                    <div data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-brand">view our
                            product</a>
                    </div>
                </div>
                <div class="col">
                    <div class="background-home">
                        <img src="./assets/images/background-home.png" alt="">
                    </div>
                    <div class="bracelet-home " data-aos="fade-left" data-aos-delay="300">
                        <img src="./assets/images/bracelet-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="about-us" class="section-padding section-connector">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-about-us" data-aos="fade-right" data-aos-delay="300">
                        <img src="./assets/images/about-us.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="setion-title text-justify" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-title-1">
                            <h1>About us</h1>
                        </div>
                        <div class="text-home-about-us">
                            <p>Ellora merupakan brand lokal di industri fashion aksesoris yang mengutamakan casual
                                elegan
                                karena kami percaya bahwa dengan seseorang menambah sentuhan aksen pemanis dari
                                aksesoris
                                yang dipakai dapat mengubah looks menjadi nilai tambah keestetikaannya. Kami menyediakan
                                produk aksesoris yang dapat digunakan di segala kegiatan bagi para pelanggan untuk
                                mendorong
                                mereka mengembangkan kecantikan mereka.</p>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-about-us">view
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work -->
    <section id="catalog" class="section-connector catalog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="setion-title text-center">
                        <div class="text-title-2">
                            <h1>Product Catalog</h1>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center border-catalog">
                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="project background-items-catalog">
                                    <img src="./assets/images/bracelet-2.jpg" alt="">
                                    <div class="row">
                                        <div class="col">
                                            <div class="product-name">
                                                Product name
                                            </div>
                                            <div class="text-price">
                                                Rp. -
                                            </div>
                                        </div>
                                        <div class="col colapse button-price">
                                            <div data-aos-delay="200"><a href="#" class="btn btn-view-price">view
                                                    detail</a>
                                            </div>
                                            <div class="content">
                                                <a href="./assets/images/bracelet-2.jpg" data-fancybox="gallery"
                                                    class="btn btn-outline-light">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="project background-items-catalog">
                                    <img src="./assets/images/bracelet-2.jpg" alt="">

                                    <div class="row">
                                        <div class="col">
                                            <div class="product-name">
                                                Product name
                                            </div>
                                            <div class="text-price">
                                                Rp. -
                                            </div>
                                        </div>
                                        <div class="col colapse button-price">
                                            <div data-aos-delay="200"><a href="#"
                                                    class="btn btn-view-price">view
                                                    detail</a>
                                            </div>
                                            <div class="content">
                                                <a href="./assets/images/bracelet-2.jpg" data-fancybox="gallery"
                                                    class="btn btn-outline-light">View Detail</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="project background-items-catalog">
                                    <img src="./assets/images/bracelet-2.jpg" alt="">
                                    <div class="row">
                                        <div class="col">
                                            <div class="product-name">
                                                Product name
                                            </div>
                                            <div class="text-price">
                                                Rp. -
                                            </div>
                                        </div>
                                        <div class="col colapse button-price">
                                            <div data-aos-delay="200"><a href="#"
                                                    class="btn btn-view-price">view
                                                    detail</a>
                                                <div class="content">
                                                    <a href="./assets/images/bracelet-2.jpg" data-fancybox="gallery"
                                                        class="btn btn-outline-light">View Detail</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>
    </section>

    <section id="layanan" class="section-padding section-connector">
        <div class="container">
            <div class="text-title-layanan">
                <h1>How to Order</h1>
            </div>
            <div class="row pemesanan">
                <div class="col-md-4">
                    <div class="img-layanan-pesanan" data-aos="fade-right" data-aos-delay="300">
                        <img src="./assets/images/pemesanan.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="setion-title text-justify background-layanan" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="text-title-pemesanan">
                            Cara Pemesanan
                        </div>
                        <div class="text-home-layanan ">
                            <p>Anda dapat dengan mudah melakukan pemesanan produk favorit Anda melalui online shop kami
                                ataupun Selain itu, kami juga menyediakan opsi untuk melakukan pemesanan
                                melalui platform Instagram kami. Cukup kunjungi akun Instagram kami dan kirimkan pesan
                                langsung untuk melakukan pemesanan. Dengan dua opsi ini, kami ingin memastikan bahwa
                                pelanggan kami memiliki kemudahan dalam melakukan pembelian, di mana pun dan kapan pun
                                mereka inginkan.
                            </p>
                        </div>
                        <div data-aos="fade-down" data-aos-delay="200"><a href="#"
                                class="btn btn-layanan">view
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pembayaran">
                <div class="col-md-8">
                    <div class="setion-title text-justify background-layanan" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="text-title-pemesanan">
                            Cara Pembayaran
                        </div>
                        <div class="text-home-layanan">
                            <p>Kami menyediakan fleksibilitas dalam proses pembayaran untuk memudahkan pelanggan kami.
                                Ketika Anda melakukan pemesanan melalui Instagram, Anda dapat membayar melalui transfer
                                bank sesuai dengan instruksi yang akan kami berikan melalui pesan langsung. Di sisi
                                lain, ketika Anda melakukan pembelian melalui online shop kami, Anda dapat memilih dari
                                berbagai opsi pembayaran yang tersedia.</p>
                        </div>
                        <div data-aos="fade-down" data-aos-delay="200"><a href="#"
                                class="btn btn-layanan">view
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="img-layanan-pembayaran" data-aos="fade-left" data-aos-delay="300">
                        <img src="./assets/images/pembayaran.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="review" class="section-connector review">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="setion-title text-center">
                        <div class="text-title-2">
                            <h1>Customers Said</h1>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center border-catalog">
                            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="300">
                                <div class=" background-items-review">
                                    <div class="row">
                                        <div class="col-sm-5 profile-user">
                                            <img src="./assets/images/avatar-2.jpg" alt="" class=foto-profile>
                                        </div>
                                        <div class="col ">
                                            <div class="row ">
                                                <div class="col text-profile">
                                                    User
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <svg width="129" height="20" viewBox="0 0 129 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67169 4.20013L10.8312 6.98792L11.183 7.83386L12.0963 7.90708L15.106 8.14836L12.8129 10.1126L12.1171 10.7086L12.3297 11.5998L13.0303 14.5367L10.4536 12.9629L9.67169 12.4853L8.88981 12.9629L6.31313 14.5367L7.01369 11.5998L7.22627 10.7086L6.53046 10.1126L4.23742 8.14836L7.24707 7.90708L8.16034 7.83386L8.51218 6.98792L9.67169 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M36.2409 4.20013L37.4004 6.98792L37.7522 7.83386L38.6655 7.90708L41.6752 8.14836L39.3821 10.1126L38.6863 10.7086L38.8989 11.5998L39.5994 14.5367L37.0228 12.9629L36.2409 12.4853L35.459 12.9629L32.8823 14.5367L33.5829 11.5998L33.7955 10.7086L33.0996 10.1126L30.8066 8.14836L33.8163 7.90708L34.7295 7.83386L35.0814 6.98792L36.2409 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M64.1843 4.76108L64.9524 6.91558L65.2735 7.81631L66.2256 7.90536L68.7075 8.13749L66.6529 10.1908L66.0819 10.7614L66.2436 11.5523L66.798 14.2636L65.0548 13.0214L64.1843 12.4011L63.3138 13.0214L61.5706 14.2636L62.125 11.5523L62.2867 10.7614L61.7157 10.1908L59.6611 8.13749L62.143 7.90536L63.0951 7.81631L63.4162 6.91558L64.1843 4.76108Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M92.1278 4.20013L93.2873 6.98792L93.6391 7.83386L94.5524 7.90708L97.562 8.14836L95.269 10.1126L94.5732 10.7086L94.7858 11.5998L95.4863 14.5367L92.9096 12.9629L92.1278 12.4853L91.3459 12.9629L88.7692 14.5367L89.4698 11.5998L89.6823 10.7086L88.9865 10.1126L86.6935 8.14836L89.7031 7.90708L90.6164 7.83386L90.9683 6.98792L92.1278 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M118.697 0.294189L121.241 6.41187L127.846 6.94136L122.814 11.2518L124.351 17.6967L118.697 14.243L113.043 17.6967L114.58 11.2518L109.548 6.94136L116.152 6.41187L118.697 0.294189Z"
                                                            fill="#D4D4D4" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row text-review">
                                        “Gelang manik-manik kaya gini cocok banget untuk di pake sehario hari ... cantik
                                        banget untuk outfit apa aja”
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="300">
                                <div class=" background-items-review">
                                    <div class="row">
                                        <div class="col-sm-5 profile-user">
                                            <img src="./assets/images/avatar-2.jpg" alt="" class=foto-profile>
                                        </div>
                                        <div class="col ">
                                            <div class="row ">
                                                <div class="col text-profile">
                                                    User
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <svg width="129" height="20" viewBox="0 0 129 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67169 4.20013L10.8312 6.98792L11.183 7.83386L12.0963 7.90708L15.106 8.14836L12.8129 10.1126L12.1171 10.7086L12.3297 11.5998L13.0303 14.5367L10.4536 12.9629L9.67169 12.4853L8.88981 12.9629L6.31313 14.5367L7.01369 11.5998L7.22627 10.7086L6.53046 10.1126L4.23742 8.14836L7.24707 7.90708L8.16034 7.83386L8.51218 6.98792L9.67169 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M36.2409 4.20013L37.4004 6.98792L37.7522 7.83386L38.6655 7.90708L41.6752 8.14836L39.3821 10.1126L38.6863 10.7086L38.8989 11.5998L39.5994 14.5367L37.0228 12.9629L36.2409 12.4853L35.459 12.9629L32.8823 14.5367L33.5829 11.5998L33.7955 10.7086L33.0996 10.1126L30.8066 8.14836L33.8163 7.90708L34.7295 7.83386L35.0814 6.98792L36.2409 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M64.1843 4.76108L64.9524 6.91558L65.2735 7.81631L66.2256 7.90536L68.7075 8.13749L66.6529 10.1908L66.0819 10.7614L66.2436 11.5523L66.798 14.2636L65.0548 13.0214L64.1843 12.4011L63.3138 13.0214L61.5706 14.2636L62.125 11.5523L62.2867 10.7614L61.7157 10.1908L59.6611 8.13749L62.143 7.90536L63.0951 7.81631L63.4162 6.91558L64.1843 4.76108Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M92.1278 4.20013L93.2873 6.98792L93.6391 7.83386L94.5524 7.90708L97.562 8.14836L95.269 10.1126L94.5732 10.7086L94.7858 11.5998L95.4863 14.5367L92.9096 12.9629L92.1278 12.4853L91.3459 12.9629L88.7692 14.5367L89.4698 11.5998L89.6823 10.7086L88.9865 10.1126L86.6935 8.14836L89.7031 7.90708L90.6164 7.83386L90.9683 6.98792L92.1278 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M118.697 0.294189L121.241 6.41187L127.846 6.94136L122.814 11.2518L124.351 17.6967L118.697 14.243L113.043 17.6967L114.58 11.2518L109.548 6.94136L116.152 6.41187L118.697 0.294189Z"
                                                            fill="#D4D4D4" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row text-review">
                                        “Gelang desain seperti ini yang aku cari.“
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="300">
                                <div class=" background-items-review">
                                    <div class="row">
                                        <div class="col-sm-5 profile-user">
                                            <img src="./assets/images/avatar-2.jpg" alt="" class=foto-profile>
                                        </div>
                                        <div class="col ">
                                            <div class="row ">
                                                <div class="col text-profile">
                                                    User
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <svg width="129" height="20" viewBox="0 0 129 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67169 4.20013L10.8312 6.98792L11.183 7.83386L12.0963 7.90708L15.106 8.14836L12.8129 10.1126L12.1171 10.7086L12.3297 11.5998L13.0303 14.5367L10.4536 12.9629L9.67169 12.4853L8.88981 12.9629L6.31313 14.5367L7.01369 11.5998L7.22627 10.7086L6.53046 10.1126L4.23742 8.14836L7.24707 7.90708L8.16034 7.83386L8.51218 6.98792L9.67169 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M36.2409 4.20013L37.4004 6.98792L37.7522 7.83386L38.6655 7.90708L41.6752 8.14836L39.3821 10.1126L38.6863 10.7086L38.8989 11.5998L39.5994 14.5367L37.0228 12.9629L36.2409 12.4853L35.459 12.9629L32.8823 14.5367L33.5829 11.5998L33.7955 10.7086L33.0996 10.1126L30.8066 8.14836L33.8163 7.90708L34.7295 7.83386L35.0814 6.98792L36.2409 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M64.1843 4.76108L64.9524 6.91558L65.2735 7.81631L66.2256 7.90536L68.7075 8.13749L66.6529 10.1908L66.0819 10.7614L66.2436 11.5523L66.798 14.2636L65.0548 13.0214L64.1843 12.4011L63.3138 13.0214L61.5706 14.2636L62.125 11.5523L62.2867 10.7614L61.7157 10.1908L59.6611 8.13749L62.143 7.90536L63.0951 7.81631L63.4162 6.91558L64.1843 4.76108Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M92.1278 4.20013L93.2873 6.98792L93.6391 7.83386L94.5524 7.90708L97.562 8.14836L95.269 10.1126L94.5732 10.7086L94.7858 11.5998L95.4863 14.5367L92.9096 12.9629L92.1278 12.4853L91.3459 12.9629L88.7692 14.5367L89.4698 11.5998L89.6823 10.7086L88.9865 10.1126L86.6935 8.14836L89.7031 7.90708L90.6164 7.83386L90.9683 6.98792L92.1278 4.20013Z"
                                                            fill="#F1C644" stroke="#F1C644" stroke-width="3" />
                                                        <path
                                                            d="M118.697 0.294189L121.241 6.41187L127.846 6.94136L122.814 11.2518L124.351 17.6967L118.697 14.243L113.043 17.6967L114.58 11.2518L109.548 6.94136L116.152 6.41187L118.697 0.294189Z"
                                                            fill="#D4D4D4" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row text-review">
                                        “Dari awal lihat langsung suka banget sa,a gelang manik-manik ini, desainnya ga
                                        pasaran dan kuliatasnya bagus”
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        <div data-aos="fade-down" data-aos-delay="200"><a href="/crudreview" class="btn btn-review1">Add
                                review</a>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
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
