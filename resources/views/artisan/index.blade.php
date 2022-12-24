<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Artisan</h3>
                <p class="text-subtitle text-muted">Send artisan commands in text e.g if you want to run: <br> <code> php artisan migrate</code>. <br>  just type "migrate" in the box</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Artisan commands</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>


    <div class="mt-10 sm:mt-0">
        @livewire('artisan.send-form')
    </div>

    <x-jet-section-border />
</x-app-layout>
