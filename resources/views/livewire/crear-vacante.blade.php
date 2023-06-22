<form class="space-y-5" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo vacante')" />

        <x-text-input
            id="titulo"
            class="block mt-1 w-full"
            type="text"
            wire:model="titulo"
            :value="old('titulo')"
            placeholder="Titulo Vacante"
        />

        @error('titulo')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div class="w-full" style="padding-top: 10px;">
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select
            id='salario'
            wire:model='salario'
            class='border-gray-300 dark:border-gray-700 dark:bg-gray-900
            dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600
            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm
            block mt-1 w-full'
        >
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
            <option value="{{ $salario->id }}">{{$salario->salario}}</option>
            @endforeach
        </select>

        <div style="padding-top: 10px;">
            @error('salario')
            <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <div class="w-full" style="padding-top: 10px;">
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select
            id='categoria'
            wire:model='categoria'
            class='border-gray-300 dark:border-gray-700 dark:bg-gray-900
            dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600
            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm
            block mt-1 w-full'
        >
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{$categoria->categoria}}</option>
            @endforeach
        </select>

        <div style="padding-top: 10px;">
            @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

    </div>

    <div class="w-full" style="padding-top: 10px;">
        <x-input-label for="empresa" :value="__('Empresa')" />

        <x-text-input
            id="empresa"
            class="block mt-1 w-full"
            type="text"
            wire:model="empresa"
            :value="old('empresa')"
            placeholder="Empresa"
        />

        <div style="padding-top: 10px;">
            @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <div class="w-full" style="padding-top: 10px;">
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />

        <x-text-input
            id="ultimo_dia"
            class="block mt-1 w-full"
            type="date"
            wire:model="ultimo_dia"
            :value="old('ultimo_dia')"
        />

        <div style="padding-top: 10px;">
            @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <div class="w-full" style="padding-top: 10px;">
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea
            wire:model="descripcion"
            placeholder="Descripción general"
            class='border-gray-300 dark:border-gray-700 dark:bg-gray-900
            dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600
            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm
            block mt-1 w-full h-72'
            style="height: 300px;"
        ></textarea>

        <div style="padding-top: 10px;">
            @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <div class="w-full" style="padding-top: 10px; padding-bottom: 20px;">
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input
            id="imagen"
            class="block mt-1 w-full"
            type="file"
            wire:model="imagen"
            accept="image/*"
        />

        <div style="padding-top: 5px; width: 600px;">
            @if($imagen)
            Imagen:
            <img src="{{ $imagen->temporaryUrl() }}">
            @endif
        </div>

        <div style="padding-top: 10px;">
            @error('imagen')
            <livewire:mostrar-alerta />
            @enderror
        </div>

        <x-primary-button style="padding-top: 10px;">
            Crear vacante
        </x-primary-button>
    </div>
</form>
