<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">ELLORA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.711914 2.10701C0.711914 1.03103 1.5812 0.161743 2.65718 0.161743H26.0003C27.0763 0.161743 27.9456 1.03103 27.9456 2.10701C27.9456 3.18298 27.0763 4.05227 26.0003 4.05227H2.65718C1.5812 4.05227 0.711914 3.18298 0.711914 2.10701ZM0.711914 11.8333C0.711914 10.7573 1.5812 9.88806 2.65718 9.88806H26.0003C27.0763 9.88806 27.9456 10.7573 27.9456 11.8333C27.9456 12.9093 27.0763 13.7786 26.0003 13.7786H2.65718C1.5812 13.7786 0.711914 12.9093 0.711914 11.8333ZM27.9456 21.5596C27.9456 22.6356 27.0763 23.5049 26.0003 23.5049H2.65718C1.5812 23.5049 0.711914 22.6356 0.711914 21.5596C0.711914 20.4837 1.5812 19.6144 2.65718 19.6144H26.0003C27.0763 19.6144 27.9456 20.4837 27.9456 21.5596Z"
                    fill="white" />
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About
                        us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product') ? 'active' : '' }}"
                        href="{{ url('/product') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('layanan') ? 'active' : '' }}"
                        href="{{ url('/layanan') }}">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('review') ? 'active' : '' }}"
                        href="{{ url('/review') }}">Review</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if (auth()->check())
                    <li class="nav-item">
                        <div class="row nav-profile">
                            <div class="col-1 pt-2">
                                <svg width="25" height="25" viewBox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38 19C38 8.531 29.469 0 19 0C8.531 0 0 8.531 0 19C0 24.51 2.375 29.469 6.137 32.946C6.137 32.965 6.137 32.965 6.118 32.984C6.308 33.174 6.536 33.326 6.726 33.497C6.84 33.592 6.935 33.687 7.049 33.763C7.391 34.048 7.771 34.314 8.132 34.58C8.265 34.675 8.379 34.751 8.512 34.846C8.873 35.093 9.253 35.321 9.652 35.53C9.785 35.606 9.937 35.701 10.07 35.777C10.45 35.986 10.849 36.176 11.267 36.347C11.419 36.423 11.571 36.499 11.723 36.556C12.141 36.727 12.559 36.879 12.977 37.012C13.129 37.069 13.281 37.126 13.433 37.164C13.889 37.297 14.345 37.411 14.801 37.525C14.934 37.563 15.067 37.601 15.219 37.62C15.751 37.734 16.283 37.81 16.834 37.867C16.91 37.867 16.986 37.886 17.062 37.905C17.708 37.962 18.354 38 19 38C19.646 38 20.292 37.962 20.919 37.905C20.995 37.905 21.071 37.886 21.147 37.867C21.698 37.81 22.23 37.734 22.762 37.62C22.895 37.601 23.028 37.544 23.18 37.525C23.636 37.411 24.111 37.316 24.548 37.164C24.7 37.107 24.852 37.05 25.004 37.012C25.422 36.86 25.859 36.727 26.258 36.556C26.41 36.499 26.562 36.423 26.714 36.347C27.113 36.176 27.512 35.986 27.911 35.777C28.063 35.701 28.196 35.606 28.329 35.53C28.709 35.302 29.089 35.093 29.469 34.846C29.602 34.77 29.716 34.675 29.849 34.58C30.229 34.314 30.59 34.048 30.932 33.763C31.046 33.668 31.141 33.573 31.255 33.497C31.464 33.326 31.673 33.155 31.863 32.984C31.863 32.965 31.863 32.965 31.844 32.946C35.625 29.469 38 24.51 38 19ZM28.386 28.443C23.237 24.985 14.801 24.985 9.614 28.443C8.778 28.994 8.094 29.64 7.524 30.343C4.636 27.417 2.85 23.408 2.85 19C2.85 10.089 10.089 2.85 19 2.85C27.911 2.85 35.15 10.089 35.15 19C35.15 23.408 33.364 27.417 30.476 30.343C29.925 29.64 29.222 28.994 28.386 28.443Z"
                                        fill="white" />
                                    <path
                                        d="M19 9.36639C15.067 9.36639 11.875 12.5584 11.875 16.4914C11.875 20.3484 14.896 23.4834 18.905 23.5974H19.076H19.209H19.247C23.085 23.4644 26.106 20.3484 26.125 16.4914C26.125 12.5584 22.933 9.36639 19 9.36639Z"
                                        fill="white" />
                                </svg>
                            </div>
                            @if (auth()->check() && auth()->user()->role == 1)
                                <div class="col">
                                    <a class="nav-link active" href="/lihatdata">Hi {{ auth()->user()->name }}</a>
                                </div>
                            @else
                                <div class="col">
                                    <a class="nav-link active" href="#">Hi {{ auth()->user()->name }}</a>
                                </div>
                            @endif
                        </div>
                    </li>
                    {{-- <li>
                        <div class="div data">
                            <svg width="25" height="26" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5.10526V13.3158C1 13.3158 1 17.421 10.6584 17.421C20.3167 17.421 20.3167 13.3158 20.3167 13.3158V5.10526" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.6584 1C20.3167 1 20.3167 5.10526 20.3167 5.10526C20.3167 5.10526 20.3167 9.21052 10.6584 9.21052C1 9.21052 1 5.10526 1 5.10526C1 5.10526 1 1 10.6584 1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.6584 25.6316C1 25.6316 1 21.5263 1 21.5263V13.3158" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.6965 25.6316C23.2206 25.6316 24.4561 24.4063 24.4561 22.8947C24.4561 21.3832 23.2206 20.1579 21.6965 20.1579C21.1939 20.1579 20.7227 20.2912 20.3168 20.5241C19.492 20.9973 18.937 21.8817 18.937 22.8947C18.937 23.9078 19.492 24.7922 20.3168 25.2654C20.7227 25.4983 21.1939 25.6316 21.6965 25.6316Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.6967 27C23.9828 27 25.836 25.1621 25.836 22.8947C25.836 20.6274 23.9828 18.7895 21.6967 18.7895C19.4105 18.7895 17.5574 20.6274 17.5574 22.8947C17.5574 25.1621 19.4105 27 21.6967 27Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5.81 38.75"/>
                                </svg>
                        </div>
                    </li> --}}
                    <li>
                        <div class="div pt-2 nav-logout">
                            <a href="/logout">
                                <svg width="18" height="25" viewBox="0 0 28 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1553 17.5H26.3105M26.3105 17.5L21.1011 22.6666M26.3105 17.5L21.1011 12.3333"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M26.3105 7.16667V5.44444C26.3105 3.54213 24.7557 2 22.8376 2H5.47293C3.55488 2 2 3.54213 2 5.44444L2 29.5556C2 31.4579 3.55488 33 5.47293 33H22.8376C24.7557 33 26.3105 31.4579 26.3105 29.5556V27.8333"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </li>
                @else
                    <li class="nav-item login">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
