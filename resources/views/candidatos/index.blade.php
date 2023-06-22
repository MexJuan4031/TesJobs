<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Candidatos a la vacante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-4xl font-bold text-center mb-10" style="font-size:25px; font-bold">Candidatos a la vacante: {{
                        $vacante->titulo}}
                    </h1>

                    <div class="md-flex md:justify-center p-5" style="text-align: justify-center; padding-top: 10px;">
                        <ul class="divide-y divide-black w-full">
                            @forelse ($vacante->candidatos as $candidato)
                            <li class="p-3 flex items-center">
                                <div class="flex-1">
                                    <p class="text-xl font-medium text-white">{{$candidato->user->name}}</p>
                                    <p class="text-sm text-white">{{$candidato->user->email}}</p>
                                    <p class="text-sm font-medium text-white">
                                        Día que se postuló: <span class="font-normal">{{$candidato->created_at->diffForHumans()}}</span>
                                    </p>
                                </div>

                                <div>
                                    <a
                                    class="p-2 inline-flex items-center shadow-sm px-2.5 py-0.5 border-black text-sm leading-5
                                    font-medium rounded-full text-white bg-blue-800 hover:bg-red-200"
                                    href="{{ asset('storage/cv/' . $candidato->cv)}}"
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        Ver CV
                                    </a>
                                </div>
                            </li>
                            @empty
                                <p class="p-3 text-center text-sm text-gray-600">No hay candidatos aún</p>
                            @endforelse
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
