<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="/" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">{{ config('app.name') }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="/services" class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a>
            <a href="/products" class="nav-item nav-link {{ request()->is('products') ? 'active' : '' }}">Products</a>
            <a href="/teams" class="nav-item nav-link {{ request()->is('teams') ? 'active' : '' }}">Teams</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="/teams" class="dropdown-item">Our Team</a>
                    <a href="/testimonials" class="dropdown-item">Testimonial</a>
                </div>
            </div> --}}
            <a href="#contact" class="nav-item nav-link">Contact</a>
            <a href="#contact" class="nav-item nav-link">Galery</a>
        </div>
        <div class=" d-none d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <i class="fa fa-phone text-primary"></i>
            </div>
            <div class="ps-3">
                <small class="text-primary mb-0">Call Us</small>
                <p class="text-light fs-5 mb-0">{{ config('credentials.phone') }}</p>
            </div>
        </div>
    </div>
</nav>
