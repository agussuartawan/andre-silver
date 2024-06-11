<div id="services" class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">
        <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-light mb-0">The Best Silver Class In Bali</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <div class="d-inline-flex align-items-center text-start">
                        <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                        <div class="ms-4">
                            <p class="fs-5 fw-bold mb-0">Call Us</p>
                            <p class="fs-1 fw-bold mb-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Class Package</p>
            <h1 class="display-6 mb-4">Explore The Package Of Our Class</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">IDR 450K - IDR 650K
                        </div>
                        <h3 class="mb-3">Standard</h3>
                        <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/sample (2).jpg" alt="">
                        @php
                            $whatsapp = '6281918030322';
                            $message =
                                "Hi Andre Silver Class, I'm interested in booking your class, here are my personal details: %0a";
                            $message .= 'Name: %0a';
                            $message .= 'Person: %0a';
                            $message .= 'Date and time: %0a';
                            $message .= 'Package: %0a';
                            $message .= 'Are you available? Thank you.';
                        @endphp
                        <div class="product-overlay">
                            <a target="_blank" class="btn btn-lg-square btn-outline-light rounded-circle"
                                href="https://wa.me/{{ $whatsapp }}?text={{ $message }}"><i
                                    class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">IDR 700K - IDR
                            1000K
                        </div>
                        <h3 class="mb-3">Premium</h3>
                        <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/sample (3).jpg" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                    class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">IDR 1100k -
                            IDR 1500K
                        </div>
                        <h4 class="mb-3">Vip</h4>
                        <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/sample (4).jpg" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                    class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
