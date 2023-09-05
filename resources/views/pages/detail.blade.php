<x-layout>
    <!-- Header Start -->
    <x-slot:header>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ __('Servizi') }}</h1>
                    <a class="h5 text-white">{{ __('Informazioni e dettagli') }}</a>
                </div>
            </div>
        </div>
    </x-slot:header>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="row g-5">

                <div class="col-lg-7 d-flex align-items-center">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <div class="section-title position-relative pb-3 mb-3">
                            <h1 class="mb-0">{{ __('Sviluppo di software e firmware') }}</h1>
                        </div>
                        <p class="mb-4">{{ __('detail.development.software') }}</p>
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('Sistemi alla quale abbiamo lavorato') }}</h5>
                        <br>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    {{ __('Macchine confezionatrici') }}</h5>
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    {{ __('Test e convalida delle batterie') }}
                                </h5>
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i>
                                   {{ __('Sistemi di geolocalizzazione') }}
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    {{ __('Prova di pompe e limitatori di velocità') }}
                                </h5>
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    {{ __('Carico e scarico dei container') }}
                                </h5>
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    {{ __('Impianto di depurazione') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative h-100 d-flex align-items-center">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.4s" src="{{ asset('images/mac4.jfif') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-5 ">
                    <div class="position-relative h-100 d-flex align-items-center" style="min-height: 500px;">
                        <img src="{{ asset('images/mac5.jpg') }}" data-wow-delay="0.4s" class="img-fluid wow fadeInUp" alt="">
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <div class="section-title position-relative pb-3 mb-3">
                            <h1 class="mb-0">{{ __('detail.digitalization.title') }}</h1>

                        </div>
                        <p>
                            {!! __('detail.digitalization.text') !!}
                        </p>
                        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.3s"></div>
                    </div>
                </div>

                <div class="col-lg-7 d-flex align-items-center">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <div class="section-title position-relative pb-3 mb-3">
                            <h1 class="mb-0">{{ __('detail.automation.title') }}</h1>
                        </div>
                        <p class="mb-4">
                            {!! __('detail.automation.text') !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative d-flex align-items-center h-100" style="min-height: 500px;">
                        <img src="{{ asset('images/mac6.jpg') }}" data-wow-delay="0.4s" class="img-fluid wow fadeInUp" alt="">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="position-relative d-flex align-items-center h-100" style="min-height: 500px;">
                        <img src="{{ asset('images/lam.webp') }}" data-wow-delay="0.4s" class="img-fluid wow fadeInUp" alt="">
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h1 class="mb-0">{{ __('Sviluppo di applicazioni e siti web') }}</h1>
                        </div>
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('Applicazioni') }}</h5>
                        <p>
                            {{ __('detail.development.app') }}
                        </p>
                        <hr>
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('Siti web') }}</h5>
                        <p>
                            {{ __('detail.development.websites') }}
                        </p>
                        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.3s"></div>
                    </div>
                </div>

                <div class="col-lg-7 d-flex align-items-center">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <div class="section-title position-relative pb-3 mb-3">
                            <h1 class="mb-0">{{ __('Industria 4.0') }}</h1>
                        </div>
                        <p class="mb-4">
                            {!! __('detail.industry4.0') !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative h-100 d-flex align-items-center" style="min-height: 500px;">
                        <img src="{{ asset('images/qua.jpeg') }}" data-wow-delay="0.4s" class="img-fluid wow fadeInUp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About end-->
</x-layout>

