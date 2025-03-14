<div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="small text-light" href="/">Home</a></li>
                @isset($breadcrumb)
                    {{ $breadcrumb }}
                @endisset
            </ol>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i
                        class="fab fa-youtube"></i></a>
                <a target="_blank" class="btn-lg-square text-primary border-end rounded-0"
                    href="https://wa.me/{{ config('credentials.phone') }}"><i class="fab fa-whatsapp"></i></a>
                <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
