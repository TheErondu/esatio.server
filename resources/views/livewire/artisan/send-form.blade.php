<section class="section">
    <div class="card">
        <div class="card-body">

            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <form wire:submit.prevent="sendArtisanCommand">
                <!-- command -->
                <div class="form-group">
                    <label for="command">Command</label>
                    <input id="command" type="text" name="command"
                        class="form-control {{ $errors->has('command') ? 'is-invalid' : '' }}" wire:model="command"
                        autocomplete="command">
                    <x-maz-input-error for="command" />
                </div>


                <button class="btn btn-primary float-end mt-2" wire:loading.attr="disabled">Save</button>
            </form>
        </div>
    </div>
</section>
