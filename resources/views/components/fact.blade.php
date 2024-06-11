@props(['count' => 0, 'label' => ''])

<div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="fact-item bg-light rounded text-center h-100 p-5">
        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
        <p class="mb-2">{{ $label }}</p>
        <h1 class="display-5 mb-0" data-toggle="counter-up">{{ $count }}</h1>
    </div>
</div>
