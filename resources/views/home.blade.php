<x-layout>

    <!-- Hero Start -->
    <x-slot:header>
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('images/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">

                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">SPH Technology</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ __('home.title') }}</h1>

                            <a href="{{ url('contact') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                {{ __('Contattaci') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:header>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('home.about.title') }}</h5>
                        <h1 class="mb-0">{{ __('home.about.subtitle') }}</h1>
                    </div>
                    <p class="mb-4">
                        {!! __('home.about.text') !!}
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('Digitalizzazione') }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('Staff Preparato') }}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('Sostenibilità') }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('Efficienza') }}</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('Chiama il nostro servizio clienti') }}</h5>
                            <h4 class="text-primary mb-0">+41 916831181</h4>
                        </div>
                    </div>
                    <a href="{{ url('quote') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">
                        {{ __('Richiedi un preventivo') }}
                    </a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                             src="{{ asset('images/about.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __('home.us.title') }}</h5>
                <h1 class="mb-0">{{ __('home.us.subtitle') }}</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>{{ __('Digitalizzazione') }}</h4>
                            <p class="mb-0">
                                {{ __('home.us.digitalization') }}
                            </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>{{ __('Sostenibilità') }}</h4>
                            <p class="mb-0">
                                {{ __('home.us.sustainability') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                             src="{{ asset('images/mac9.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>{{ __('Staff Preparato') }}</h4>
                            <p class="mb-0">
                                {{ __('home.us.staff') }}
                            </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>{{ __('Efficienza') }}</h4>
                            <p class="mb-0">
                                {{ __('home.us.efficiency') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __('home.services.title') }}</h5>
                <h1 class="mb-0"></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __('home.services.software_development.title') }}</h4>
                        <p class="m-0">{{ __('home.services.software_development.text') }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ url('detail') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __('home.services.digitalization.title') }}</h4>
                        <p class="m-0">{{ __('home.services.digitalization.text') }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ url('detail') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __('home.services.automation.title') }}</h4>
                        <p class="m-0">{{ __('home.services.automation.text') }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ url('detail') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __('home.services.web_development.title') }}</h4>
                        <p class="m-0">{{ __('home.services.web_development.text') }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ url('detail') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ __('home.services.app_development.title') }}</h4>
                        <p class="m-0">{{ __('home.services.app_development.text') }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ url('detail') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">{{ __('Chiamaci per più informazioni') }}</h3>
                        <p class="text-white mb-3">{{ __('Dal Lunedì al venerdì dalle 8:30-12:30, 14:00-18:00') }}</p>
                        <h2 class="text-white mb-0">+41 916831181</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

</x-layout>
