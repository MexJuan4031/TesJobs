<div class="p-10 text-white">
    <div class="mb-5">
        <h3 class="font-bold text-3xl my-3">
            {{ $vacante->titulo }}
        </h3>
            <div class="md:grid md:grid-cols-2">
                <p class="text-sm uppercase font-bold my-3">De:
                    <span class="normal-case font-normal">{{ $vacante->empresa }}</span>
                </p>

                <p class="text-sm uppercase font-bold my-3">Ultimo día para postularse:
                    <span class="normal-case font-normal">{{ $vacante->ultimo_dia->toFormattedDateString()}}</span>
                </p>

                <p class="text-sm uppercase font-bold my-3">Categoría:
                    <span class="normal-case font-normal">{{ $vacante->categoria->categoria}}</span>
                </p>

                <p class="text-sm uppercase font-bold my-3">Salario:
                    <span class="normal-case font-normal">{{ $vacante->salario->salario}}</span>
                </p>
            </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="{{'Imagen vacante' . $vacante->titulo}}">
        </div>

        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción del puesto</h2>
            <p>{{$vacante->descripcion}}</p>
        </div>
    </div>

    @guest
        <div class="mt-5 border border-dashed p-5 text-center">
            <p>
                ¿Deseas aplicarte a esta vacante? <a class="font-bold text-indigo-600"
                href="{{ route('register') }}">Obten una cuenta y aplica a más vacantes</a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante"/>
    @endcannot

</div>
