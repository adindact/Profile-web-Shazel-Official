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

    <section id="review" class="section-connector lihatdata">
        <div class="container-fluid">
            <div class="row justify-content-center border-catalog">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="300">
                    <div class=" background-items-review">
                        <div class="row">
                            <div class="col-5 icon-data">
                                <svg width="134" height="142" viewBox="0 0 184 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 35.1001V91.3007C7 91.3007 7 119.401 73.111 119.401C139.222 119.401 139.222 91.3007 139.222 91.3007V35.1001" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M73.111 7C139.222 7 139.222 35.1003 139.222 35.1003C139.222 35.1003 139.222 63.2006 73.111 63.2006C7 63.2006 7 35.1003 7 35.1003C7 35.1003 7 7 73.111 7Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M73.111 175.603C7 175.603 7 147.502 7 147.502V91.3018" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M148.666 175.602C159.098 175.602 167.555 167.215 167.555 156.869C167.555 146.522 159.098 138.135 148.666 138.135C145.225 138.135 142 139.048 139.222 140.642C133.576 143.881 129.777 149.935 129.777 156.869C129.777 163.803 133.576 169.857 139.222 173.096C142 174.69 145.225 175.602 148.666 175.602Z" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M148.667 184.969C164.315 184.969 177 172.389 177 156.869C177 141.349 164.315 128.769 148.667 128.769C133.018 128.769 120.333 141.349 120.333 156.869C120.333 172.389 133.018 184.969 148.667 184.969Z" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5.81 38.75"/>
                                    </svg>
                            </div>
                            <div class="col text-data">
                                <a href="{{ url('/dataUsers') }}" style="text-decoration:none" class="text-data" >Data Users</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="300">
                    <div class=" background-items-review">
                        <div class="row">
                            <div class="col-5 icon-data">
                                <svg width="134" height="142" viewBox="0 0 184 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 35.1001V91.3007C7 91.3007 7 119.401 73.111 119.401C139.222 119.401 139.222 91.3007 139.222 91.3007V35.1001" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M73.111 7C139.222 7 139.222 35.1003 139.222 35.1003C139.222 35.1003 139.222 63.2006 73.111 63.2006C7 63.2006 7 35.1003 7 35.1003C7 35.1003 7 7 73.111 7Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M73.111 175.603C7 175.603 7 147.502 7 147.502V91.3018" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M148.666 175.602C159.098 175.602 167.555 167.215 167.555 156.869C167.555 146.522 159.098 138.135 148.666 138.135C145.225 138.135 142 139.048 139.222 140.642C133.576 143.881 129.777 149.935 129.777 156.869C129.777 163.803 133.576 169.857 139.222 173.096C142 174.69 145.225 175.602 148.666 175.602Z" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M148.667 184.969C164.315 184.969 177 172.389 177 156.869C177 141.349 164.315 128.769 148.667 128.769C133.018 128.769 120.333 141.349 120.333 156.869C120.333 172.389 133.018 184.969 148.667 184.969Z" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5.81 38.75"/>
                                    </svg>
                            </div>
                            <div class="col text-data">
                                <a href="{{ url('/dataProduct') }}" style="text-decoration:none" class="text-data" >Data Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="300">
                    <div class=" background-items-review">
                        <div class="row">
                            <div class="col-5 icon-data">
                                <svg width="134" height="142" viewBox="0 0 184 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 35.1001V91.3007C7 91.3007 7 119.401 73.111 119.401C139.222 119.401 139.222 91.3007 139.222 91.3007V35.1001" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M73.111 7C139.222 7 139.222 35.1003 139.222 35.1003C139.222 35.1003 139.222 63.2006 73.111 63.2006C7 63.2006 7 35.1003 7 35.1003C7 35.1003 7 7 73.111 7Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M73.111 175.603C7 175.603 7 147.502 7 147.502V91.3018" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M148.666 175.602C159.098 175.602 167.555 167.215 167.555 156.869C167.555 146.522 159.098 138.135 148.666 138.135C145.225 138.135 142 139.048 139.222 140.642C133.576 143.881 129.777 149.935 129.777 156.869C129.777 163.803 133.576 169.857 139.222 173.096C142 174.69 145.225 175.602 148.666 175.602Z" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M148.667 184.969C164.315 184.969 177 172.389 177 156.869C177 141.349 164.315 128.769 148.667 128.769C133.018 128.769 120.333 141.349 120.333 156.869C120.333 172.389 133.018 184.969 148.667 184.969Z" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5.81 38.75"/>
                                    </svg>
                            </div>
                            <div class="col text-data">
                                <a href="{{ url('#') }}" style="text-decoration:none" class="text-data" >Data Review</a>
                            </div>
                        </div>
                    </div>
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
