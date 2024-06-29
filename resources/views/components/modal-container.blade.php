@props([
    'showModal' => true,
])

<div id="static-modal" data-modal-backdrop="static" x-on:click.away="isModalOpen = false" x-cloak x-transition
    tabindex="-1" aria-hidden="!show"
    class="overflow-y-auto w-full overflow-x-hidden fixed z-50 justify-center items-center max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            {{ $slot }}
        </div>
    </div>
</div>
