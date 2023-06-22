<div>
    <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

        @if (count($vacantes) > 0)

        @foreach ($vacantes as $vacante)
            <div class="p-6 bg-slate-800 border-b border-black md:flex md:justify-between md:items-center">
                <div class="space-y-3">

                    <!-- Información vacantes -->
                    <a href="{{ route('vacantes.show', $vacante->id) }}" class="text-xl font-bold text-white">
                        {{ $vacante->titulo }}
                    </a>
                    <p class="text-sm text-slate-400 font-bold">{{ $vacante->empresa }}</p>
                    <p class="text-sm text-white">Último día: {{ $vacante->ultimo_dia->format('d/m
                    /Y') }}
                </div>

                <!-- Botones para vacantes -->
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a
                        href="{{route('candidatos.index', $vacante)}}"
                        class="bg-black py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >
                    {{ $vacante->candidatos->count()}}
                    Candidatos</a>

                    <a
                        href="{{ route('vacantes.edit',$vacante->id) }}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >Editar</a>

                    <button
                        wire:click="$emit('mostrarAlerta', {{ $vacante->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >Eliminar</button>
                </div>
            </div>
        @endforeach

        @else
            <p class="p-3 text-center text-sm text-white">Ups! No hay vacantes que mostrar ahora</p>
        @endif
    </div>

    <!-- Añadiendo páginación -->
    <div class="flex justify-center mt-10">
        {{ $vacantes->links()}}
    </div>
</div>

@push('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('mostrarAlerta', vacanteid => {

            Swal.fire({
            title: 'Eliminar vacante?',
            text: "Una vacante eliminada no se puede recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, ¡deseo eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })
        })


    </script>

@endpush
