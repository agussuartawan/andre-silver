<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-3 lg:px-8">
            @if (session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <h1 class="text-4xl mb-4">Paket Silver Class</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @forelse ($packages as $p)
                    <div class="">
                        <img src="{{ asset('/storage/images/' . $p->image_url) }}" class="object-cover h-60 w-full"
                            alt="vip" />
                        <div class="p-6 w-full bg-white rounded-lg shadow">
                            <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $p->name }}</h2>
                            <h3 class="mb-2 text-lg font-bold tracking-tight text-gray-900">IDR
                                {{ currency($p->min_price) }} -
                                IDR {{ currency($p->max_price) }}</h3>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $p->description }}</p>
                            <a href="{{ route('package.edit', $p) }}"
                                class="inline-flex items-center px-6 mt-3 py-2 text-sm font-medium text-center text-white bg-gray-800 rounded-lg hover:bg-blue-800">
                                Edit
                            </a>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada data.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
