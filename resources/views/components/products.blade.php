<div id="services" class="py-6 pt-0 my-6 container-xxl bg-light">
    <div class="container">
        <div class="p-5 my-6 mt-0 bg-primary text-light rounded-bottom wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="mb-0 display-4 text-light">The Best Silver Class In Bali</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <div class="d-inline-flex align-items-center text-start">
                        <i class="flex-shrink-0 fa fa-phone-alt fa-4x"></i>
                        <div class="ms-4">
                            <p class="mb-0 fs-5 fw-bold">Call Us</p>
                            <p class="mb-0 fs-1 fw-bold">+6281918030322</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="mb-2 text-primary text-uppercase">// Class Package</p>
            <h1 class="mb-4 display-6">Explore The Package Of Our Class</h1>
        </div>
        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden bg-white rounded product-item d-flex flex-column h-100">
                        <div class="p-4 text-center">
                            <div class="px-3 mb-3 border d-inline-block border-primary rounded-pill">IDR
                                {{ currency($product->min_price) }} - IDR {{ currency($product->max_price) }}
                            </div>
                            <h3 class="mb-3">{{ $product->name }}</h3>
                            <span>{{ $product->description }}</span>
                        </div>
                        <div class="mt-auto position-relative">
                            <img class="img-fluid" src="{{ asset('storage/images/' . $product->image_url) }}"
                                alt="">
                            @php
                                $whatsapp = '6287726674945';
                                $message =
                                    "Hi Andre Silver Class, I'm interested in booking your class, here are my personal details: %0a";
                                $message .= 'Name: %0a';
                                $message .= 'Person: %0a';
                                $message .= 'Date and time: %0a';
                                $message .= 'Package: ' . $product->name . '%0a';
                                $message .= 'Are you available? Thank you.';
                            @endphp
                            <div class="product-overlay">
                                <a target="_blank" class="w-auto p-3 btn btn-lg-square btn-outline-light"
                                    href="https://wa.me/{{ $whatsapp }}?text={{ $message }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
