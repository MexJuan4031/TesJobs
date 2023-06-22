<div class="bg-slate-700 p-5 mt-10 flex flex-col justify-center items-center rounded-lg">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 text-sm">
            {{ session('mensaje') }}
        </div>
    @else
    <form wire:submit.prevent='postularme' class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculum u hoja de vida (PDF)')" />
            <x-text-input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 w-full" />
        </div>

        @error('cv')
            <livewire:mostrar-alerta :message="$message">
        @enderror

            <button class=" bg-slate-950 my-5 py-2 px-4 rounded-lg">
                {{__('Postularme')}}
            </button>
    </form>
    @endif

</div>
