<x-landing-layout>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
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
    <x-products />
    <!-- Product End -->


    <!-- Service Start -->
    <x-services />
    <!-- Service End -->


    <!-- Team Start -->
    <x-teams />
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl bg-light my-6 py-6 pb-0">
        <div class="container">
            <div class="bg-primary text-light rounded-top p-5 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4 text-light mb-0">Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="position-relative">
                            <input class="form-control bg-transparent border-light w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-dark py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</x-landing-layout>
