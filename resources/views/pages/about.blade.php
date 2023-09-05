<x-layout>

    <!-- Header Start -->
    <x-slot:header>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ __('Chi siamo') }}</h1>
                    <a href="" class="h5 text-white">{{ __('Perché scegliere noi') }}</a>
                </div>
            </div>
        </div>
    </x-slot:header>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('about.title') }}</h5>
                        <h1 class="mb-0">{{ __('about.subtitle') }}</h1>
                    </div>
                    <p class="mb-4">
                        {!! __('about.text') !!}
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
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('Chiama il nostro servizio clienti') }}</h5>
                            <h4 class="text-primary mb-0">+41 916831181</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid" data-wow-delay="0.9s" src="{{ asset('images/feature.jpg') }}"  alt="">
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img src="{{ asset('images/mac8.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('about.us.title') }}</h5>
                        <h1 class="mb-0">{{ __('about.us.subtitle') }}</h1>
                    </div>

                    <h5>{{ __('Digitalizzazione') }}</h5>
                    <p>{{ __('about.us.digitalization') }}</p>
                    <h5>{{ __('Sostenibilità') }}</h5>
                    <p>{{ __('about.us.sustainability') }}</p>
                    <h5>{{ __('Efficienza') }}</h5>
                    <p>{{ __('about.us.efficiency') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-layout>
