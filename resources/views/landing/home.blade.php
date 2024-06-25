<x-landing-layout>

    <!-- Carousel Start -->
    <div class="p-0 pb-5 container-fluid wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <x-carousel :imageUrl="asset('img/carousel-1.jpg')" />
            <x-carousel :imageUrl="asset('img/carousel.jpg')" />
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Facts Start -->
    <x-facts />
    <!-- Facts End -->

    <!-- About Start -->
    <x-about />
    <!-- About End -->


    <!-- Product Start -->
    <x-products :products="$packages" />
    <!-- Product End -->


    <!-- Service Start -->
    <x-services />
    <!-- Service End -->


    <!-- Team Start -->
    <x-teams />
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="py-6 pb-0 my-6 container-xxl bg-light">
        <div class="container">
            <div class="p-5 my-6 mb-0 bg-primary text-light rounded-top wow fadeInUp" data-wow-delay="0.1s">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="mb-0 display-4 text-light">Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="position-relative">
                            <form id="subscribe" method="POST" action="/subscribe">
                                @csrf
                                <input id="email" name="email"
                                    class="py-3 bg-transparent form-control border-light w-100 ps-4 pe-5" type="text"
                                    placeholder="Your email" value="{{ old('email') }}">
                                <div id="message"></div>
                                <button type="submit"
                                    class="top-0 px-3 py-2 mt-2 btn btn-dark position-absolute end-0 me-2">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</x-landing-layout>
