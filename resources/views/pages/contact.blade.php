<!--suppress ALL -->
<x-layout>

    <!-- Header Start -->
    <x-slot:header>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ __('Contattaci') }}</h1>
                    <a class="h5 text-white">{{ __('Inizia a raggiungere risultati tangibili oggi') }}</a>
                </div>
            </div>
        </div>
    </x-slot:header>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __('Contatti') }}</h5>
                <h1 class="mb-0">{{ __('Per qualsiasi domanda, non esitate a contattarci') }}</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center wow fadeIn justify-content-center" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('Chiamaci per qualsiasi informazione') }}</h5>
                            <h4 class="text-primary mb-0">+41 916831181</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center wow fadeIn justify-content-center" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('Dove ci puoi trovare?') }}</h5>
                            <h4 class="text-primary mb-0">Via Giuseppe Motta 16, 6830 Chiasso, Svizzera</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <iframe
                        class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.922440854191!2d9.031497!3d45.832834999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47869d37dff15fe7%3A0x2b0dea6e31f00dbe!2sVia%20Giuseppe%20Motta%2016%2C%206830%20Chiasso%2C%20Svizzera!5e0!3m2!1sit!2sit!4v1693835298236!5m2!1sit!2sit"
                        style="min-height: 450px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-layout>
