<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Paket Silver') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-3 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow rounded-lg">
                <div class="w-full">
                    <form method="post" action="{{ route('package.update', $package) }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" id="name" name="name"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 required"
                                value="{{ $package->name }}" />
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="mb-5">
                                <label for="min_price" class="block mb-2 text-sm font-medium text-gray-900">Harga
                                    terendah</label>
                                <input type="number" id="min_price" name="min_price"
                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 required"
                                    value="{{ $package->min_price }}" />
                                @error('min_price')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="max_price" class="block mb-2 text-sm font-medium text-gray-900">Harga
                                    tertinggi</label>
                                <input type="number" id="max_price" name="max_price"
                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 required"
                                    value="{{ $package->max_price }}" />
                                @error('max_price')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                            <textarea
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 required"
                                name="description" id="description" cols="10" rows="10">{{ $package->description }}</textarea>
                            @error('description')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div x-data="{ imagePreview: '{{ $package->image_url ? asset('storage/images/' . $package->image_url) : null }}' }">
                            <div class="mb-5">
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Gambar
                                    Paket</label>
                                <input type="file" accept="image/*" id="image" name="image"
                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5"
                                    @change="imagePreview = URL.createObjectURL($event.target.files[0])" />
                                @error('image')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-5 flex justify-center" x-show="imagePreview">
                                <img id="preview" class="w-64 object-cover" :src="imagePreview"
                                    alt="Image Preview">
                            </div>
                        </div>

                        <x-primary-button>{{ __('Simpan') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
