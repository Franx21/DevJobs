<form wire:submit="editarVacante" class="md:w-1/2 space-y-5">
    <!-- Titulo -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input wire:model="titulo" id="titulo" class="block mt-1 w-full" type="text" name="titulo" required
            autofocus autocomplete="titulo" placeholder="Titulo de la vacante" />
        @error('titulo')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <!-- Salario -->
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select wire:model='salario' name="salario" id="salario"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <!-- Categoria -->
    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select wire:model='categoria' name="categoria" id="categoria"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <!-- Empresa -->
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input wire:model="empresa" id="empresa" class="block mt-1 w-full" type="text" name="empresa" required
            autofocus autocomplete="empresa" placeholder="Empresa: ej. Netflix, Uber, Shopify" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <!-- calendario ultimo dia -->
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input wire:model="ultimo_dia" id="ultimo_dia"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            type="date" name="ultimo_dia" autocomplete="ultimo_dia" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />

    </div>
    <!-- Descripcion -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del puesto')" />
        <textarea wire:model="descripcion" name="descripcion" placeholder="Descripcion general del puesto, experiencia"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-36"></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>
    <!-- Imagen -->
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input wire:model="imagen_nueva" id="imagen" class="block mt-1 w-full" type="file" name="imagen"
            autofocus accept="image/*" />

        <div class="my-5 w-40">
            <x-input-label :value="__('Imagen Actual')" />

            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen vacante' . $titulo }}">
        </div>
        <div class="my-5 w-40">
            @if ($imagen_nueva)
            Imagen Nueva:
            <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="">
            @endif
        </div>
        {{--
        <x-input-error :messages="$errors->get('imagen_nueva')" class="mt-2" /> --}}

    </div>
    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
            {{ __('Guardar Cambios') }}
        </x-primary-button>
    </div>
</form>