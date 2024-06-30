<x-landing-layout>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a class="small text-light" href="/about">About</a></li>
    </x-slot>

    <x-slot name="pageHeader">
        <x-page-header title="About" />
    </x-slot>

    <!-- About Start -->
    <x-about />
    <!-- About End -->

    <!-- Team Start -->
    {{-- <x-teams /> --}}
    <!-- Team End -->

</x-landing-layout>
