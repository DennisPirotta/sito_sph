<!--suppress ALL -->
<x-layout>

    <!-- Header Start -->
    <x-slot:header>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ __('Preventivi') }}</h1>
                    <a class="h5 text-white">{{ __('Richiedi subito un preventivo') }}</a>
                </div>
            </div>
        </div>
    </x-slot:header>
    <!-- Header End -->

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('Richiedi un preventivo') }}</h5>
                        <h1 class="mb-0">{{ __('quote.title') }}</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>{{ __('Risposta entro 24 ore') }}</h5>
                        </div>
                    </div>
                    <p class="mb-4">
                        {!! __('quote.text') !!}
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('Chiamaci per ricevere più informazioni') }}</h5>
                            <h4 class="text-primary mb-0">+41 916831181</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="post" action="{{ route('email.quote-request') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="{{ __('Nome') }}" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <select name="service" class="form-select bg-light border-0" style="height: 55px;" required>
                                        <option disabled selected hidden value>{{ __('Seleziona un servizio') }}</option>
                                        <option value="Sviluppo software e firmware">{{ __('Sviluppo di software e firmware') }}</option>
                                        <option value="Digitalizzazione">{{ __('Digitalizzazione') }}</option>
                                        <option value="Automatizzazione dei macchinari">{{ __('Automatizzazione dei macchinari') }}</option>
                                        <option value="Sviluppo siti web">{{ __('Sviluppo di applicazioni e siti web') }}</option>
                                        <option value="Altro">{{ __('Altro') }}</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="text" class="form-control bg-light border-0" rows="3" placeholder="{{ __('Messaggio') }}"></textarea>
                                </div>
                                <div class="col-12 d-flex align-items-center" style="color: black !important;">
                                    <input type="checkbox" name="privacy&policies" class="form-check" id="subscription" required>
                                    <label class="ms-2" for="subscription">Accetto i <a href="{{ route('terms') }}" role="button" class="text-decoration-underline" style="color: darkslategray">termini e condizioni</a></label>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">{{ __('Invia la richiesta') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('message'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire(
                'Grazie!',
                'Ti ringraziamo per averci contattato, il nostro team ti risponderà entro 24 ore.',
                'success'
            )
        </script>
        @php(session()->forget('message'))
    @endif

    <!-- Quote End -->

</x-layout>
