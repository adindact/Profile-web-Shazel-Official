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

    <section class="section-padding section-connector cara-pemesanan">
        <div class="container layanan-section-1">
            <div class="text-title-pesanan text-center">
                <h1>Cara Pemesanan</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-layanan-pesanan" data-aos="fade-right" data-aos-delay="300">
                        <img src="./assets/images/pemesanan.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="setion-title text-justify background-layanan" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="text-pemesanan-layanan">
                            <p>Anda dapat dengan mudah melakukan pemesanan produk favorit Anda melalui online shop kami
                                ataupun Selain itu, kami juga menyediakan opsi untuk melakukan pemesanan
                                melalui platform Instagram kami. Cukup kunjungi akun Instagram kami dan kirimkan pesan
                                langsung untuk melakukan pemesanan. Dengan dua opsi ini, kami ingin memastikan bahwa
                                pelanggan kami memiliki kemudahan dalam melakukan pembelian, di mana pun dan kapan pun
                                mereka inginkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding section-connector cara-pembayaran">
        <div class="container layanan-section-2">
            <div class="text-title-pembayaran text-center">
                <h1>Cara Pembayaran</h1>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="setion-title text-justify" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="text-pembayaran-layanan">
                            <p>Kami menyediakan fleksibilitas dalam proses pembayaran untuk memudahkan pelanggan kami.
                                Ketika Anda melakukan pemesanan melalui Instagram, Anda dapat membayar melalui transfer
                                bank sesuai dengan instruksi yang akan kami berikan melalui pesan langsung. Di sisi
                                lain, ketika Anda melakukan pembelian melalui online shop kami, Anda dapat memilih dari
                                berbagai opsi pembayaran yang tersedia.</p>
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

    @include('layouts.floating')
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
