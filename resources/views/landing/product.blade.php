<x-landing-layout>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a class="small text-light" href="/product">Products</a></li>
    </x-slot>

    <x-slot name="pageHeader">
        <x-page-header title="Products" />
    </x-slot>


    <!-- Product Start -->
    <x-products :products="$packages" />
    <!-- Product End -->
</x-landing-layout>
