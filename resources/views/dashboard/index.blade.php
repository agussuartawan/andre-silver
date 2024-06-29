<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="px-3 mx-auto max-w-7xl lg:px-8">
            @if (session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="text-sm font-medium ms-3">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <h1 class="mb-4 text-4xl">Paket Silver Class</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3" x-data="{ confirmDelete(event) { if (confirm('Are you sure you want to delete this item?')) { event.target.submit(); } } }">
                @forelse ($packages as $p)
                    <div class="">
                        <img src="{{ asset('/storage/images/' . $p->image_url) }}"
                            class="rounded-t-lg object-cover w-full h-60" alt="{{ $p->name }}" />
                        <div class="w-full p-6 bg-white rounded-b-lg shadow">
                            <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $p->name }}</h2>
                            <h3 class="mb-2 text-lg font-bold tracking-tight text-gray-900">IDR
                                {{ currency($p->min_price) }}</h3>
                            <p class="mb-3 font-normal text-gray-700">{{ $p->description }}</p>
                            <div class="flex gap-3">
                                <a href="{{ route('package.edit', $p) }}"
                                    class="inline-flex items-center px-6 py-2 mt-3 text-sm font-medium text-center text-white bg-gray-800 rounded-lg hover:bg-gray-600">
                                    Edit
                                </a>
                                <form action="{{ route('package.delete', $p) }}" method="post"
                                    @submit.prevent="confirmDelete">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="inline-flex items-center px-6 py-2 mt-3 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada data.</p>
                @endforelse
                <a title="Add new package" href="{{ route('package.create') }}">
                    <div
                        class="hover:bg-slate-50 flex items-center min-h-full justify-center border border-dashed rounded-lg border-gray-700">
                        <div class="py-10">
                            <svg class="w-10 h-10 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(event) {
            if (confirm('Anda yakin akan menghapus paket ini?')) {
                event.target.submit();
            }
        }
    </script>
</x-app-layout>
