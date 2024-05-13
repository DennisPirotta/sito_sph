<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>S+H Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/logo_sph.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: var(--primary) #ffffff;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 5px;
        }

        *::-webkit-scrollbar-track {
            background: #ffffff;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #cf9cde;
            border-radius: 0;
            border: 0 solid #ffffff;
        }
    </style>

</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="https://goo.gl/maps/jrv17VtRHZHpcX4UA">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>via Giuseppe Motta, 16 – 6830 – Chiasso, Svizzera</small>
                </a>
                <a href="tel:+41 916831181">
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+41 916831181</small>
                </a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.swissfirms.ch/it/details/?ENOFI=02209612" target="_blank">
                    <img src="{{ asset('images/swissfirms-logo.jpeg') }}" width="16" height="16" alt="SwissFirms"/>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/sphtechnology/" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <img src="{{ asset('images/logo_sph.png') }}"  alt="S+H Technology"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link @if(request()->fullUrlIs(url('home'))) active @endif">
                    {{ __('Home') }}
                </a>
                <a href="{{ url('about') }}" class="nav-item nav-link @if(request()->fullUrlIs(url('about'))) active @endif">
                    {{ __('Chi siamo') }}
                </a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle @if(request()->fullUrlIs(url('detail')) || request()->fullUrlIs(url('quote'))) active @endif" data-bs-toggle="dropdown">{{ __('Servizi') }}</a>
                    <div class="dropdown-menu m-0">
                        <a href="https://www.smartremotesolutions.com/" target="_blank" class="dropdown-item">Smart remote solutions</a>
                        <a href="{{ url('detail') }}" class="dropdown-item">{{ __('Dettagli') }}</a>
                        <a href="{{ url('quote') }}" class="dropdown-item">{{ __('Preventivi') }}</a>
                    </div>
                </div>
                <a href="{{ url('contact') }}" class="nav-item nav-link  @if(request()->fullUrlIs(url('contact'))) active @endif">
                    {{ __('Contatti') }}
                </a>
                <a href="{{ url('work') }}" class="nav-item nav-link  @if(request()->fullUrlIs(url('work'))) active @endif">
                    {{ __('Lavora con noi') }}
                </a>
            </div>
            <a class="ms-3" href="{{ url('locale') . "/" . $app->getLocale() }}">
                @if($app->isLocale('it'))
                    <img src="{{ asset('images/bandiera italiana.jpg') }}" alt="IT" style="width: 30px">
                @else
                    <img src="{{ asset('images/bandiera inglese.jpg') }}" alt="EN" style="width: 30px">
                @endif
            </a>
        </div>
    </nav>

    {{ $header }}
</div>
<!-- Navbar & Carousel End -->


{{ $slot }}


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>SPH Technology</h1>
                    </a>
                    <p class="mt-3 mb-4">
                        {{ __('home.footer') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">{{ __('Mettiti in contatto') }}</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <a href="https://goo.gl/maps/jrv17VtRHZHpcX4UA" target="_blank"><p class="mb-0">via Giuseppe Motta, 16 – 6830 – Chiasso, Svizzera</p></a>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <a href="tel:+41 916831181"><p class="mb-0">+41 916831181</p></a>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-file-earmark-text text-primary me-2"></i>
                            <p class="mb-0 text-primary">CHE 432.655.644</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2"
                               href="https://www.swissfirms.ch/it/details/?ENOFI=02209612"
                               target="_blank">
                                <img src="{{ asset('images/swissfirms-logo.jpeg') }}" width="16" height="16" alt="SwissFirms"/>
                            </a>
                            <a class="btn btn-primary btn-square" href="https://www.instagram.com/sphtechnology/"
                               target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">{{ __('Collegamenti Rapidi') }}</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ url('/') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ url('about') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{ __('Chi siamo') }}</a>
                            <a class="text-light mb-2" href="{{ url('detail') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{ __('I nostri servizi') }}</a>
                            <a class="text-light" href="{{ url('contact') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{ __('Contattaci') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">{{ __('I nostri punti di forza') }}</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ url('about') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{ __('Digitalizzazione') }}</a>
                            <a class="text-light mb-2" href="{{ url('about') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{ __('Sostenibilità') }}</a>
                            <a class="text-light mb-2" href="{{ url('about') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{ __('Efficienza') }}</a>
                            <a class="text-light mb-2" href="{{ route('terms') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{ __('Legge LPD') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">SPH Technology</a>. All
                        Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>


