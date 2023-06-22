<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-4xl font-bold text-center mb-10" style="font-size:25px; font-bold">Mis notificaciones</h1>

                    <div class="divide-y divide-black">
                        @forelse ($notificaciones as $notificacion)
                                <div class="bg-slate-700 p-5 border border-black md:flex md:justify-between md:items-center">
                                    <div>
                                    <p class="font-bold">Tienes un nuevo candidato:
                                        <span class="font-normal">{{$notificacion->data['nombre_vacante']}}</span>
                                    </p>

                                    <p class="font-bold">-- La pubicación fue:
                                        <span class="font-normal">{{$notificacion->created_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                                    <div class="mt-3 lg:mt-0">
                                        <a href="{{route('candidatos.index', $notificacion-data['id_vacante'])}}" class="bg-slate-950 p-3 text-sm uppercase font-bold text-white rounded-lg">
                                            Ver Candidatos
                                        </a>
                                    </div>
                                </div>

                        @empty
                            <p class="text-center text-gray-600">No hay notificaciones nuevas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
