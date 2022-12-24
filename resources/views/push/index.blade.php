<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Send Push Notification</h3>
                <p class="text-subtitle text-muted">Send message to all logged in App users</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Push Notification</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>


    <div class="mt-10 sm:mt-0">
        @livewire('push.send-form')
    </div>

    <x-jet-section-border />
</x-app-layout>
