<!--suppress ALL -->
<x-layout>
    <!-- Header Start -->
    <x-slot:header>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ __('Lavora con noi') }}</h1>
                    <a class="h5 text-white">{{ __('Unisciti al nostro team e partecipa alla rivoluzione dell\'innovazione!') }}</a>
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
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('Invia il tuo curriculum') }}</h5>
                        <h1 class="mb-0">{{ __('Unisciti al nostro team: invia il tuo curriculum per opportunità di lavoro disponibili') }}</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>{{ __('Risposta entro 24 ore') }}</h5>
                        </div>
                    </div>
                    <p class="mb-4">
                        {{ __('Siamo sempre alla ricerca di persone di talento e motivate per unirci al nostro team e aiutarci a crescere come azienda. Se sei interessato a lavorare con noi, ti invitiamo a inviare il tuo curriculum compilando il modulo.') }}
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('Chiamaci per richiedere maggiori informazioni') }}</h5>
                            <h4 class="text-primary mb-0">+41 916831181</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-info-circle text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('Consulta l\'informativa sul trattamento dei dati personali') }}</h5>
                            <h4 class="text-primary mb-0">
                                <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" wow zoomIn" data-wow-delay="0.9s">{{ __('Legge LPD') }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="post" action="php/email.php" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="{{ __('Nome') }}" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea name="text" class="form-control bg-light border-0" rows="3" placeholder="{{ __('Messaggio') }}" style="height: 55px;"></textarea>
                                </div>
                                <div>
                                    <h5 style="color:white;"><strong class="text-uppercase">{{ __('Allega il tuo CV') }}</strong></h5>
                                    <span>
                                        <input type="file" name="cv" size="40" class="form-control custom-file-input" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv" aria-invalid="false">
                                    </span>
                                </div>
                                <div class="col-12 d-flex align-items-center" style="color: black !important;">
                                    <input type="checkbox" name="privacy&policies" class="form-check" id="subscription" required>
                                    <label class="ms-2" for="subscription">{{ __('Accetto') }} <a href="{{ route('terms') }}" role="button" class="text-decoration-underline" style="color: darkslategray">termini e condizioni</a></label>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <embed type="application/pdf" src="{{ asset('INFORMATIVA_LPD_SVIZZERA_S+H_TECHNOLOGY.pdf') }}" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote End -->
</x-layout>
