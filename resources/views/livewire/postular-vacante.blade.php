<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    <form wire:submit.prevent='postularme' class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculum o hoja de vida (PDF)')" />
            <x-text-input wire:model='cv' id="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
        </div>
        @error('cv')
        <livewire:mostrar-alerta :message="$message">
            @enderror
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Postular') }}
                </x-primary-button>
            </div>
    </form>
</div>