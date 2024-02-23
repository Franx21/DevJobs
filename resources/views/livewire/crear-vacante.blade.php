<form wire:submit="titulo" class="md:w-1/2 space-y-5">
    <!-- Titulo -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input wire:model="form.email" id="titulo" class="block mt-1 w-full" type="text" name="titulo" required
            autofocus autocomplete="titulo" placeholder="Titulo de la vacante" />
    </div>
    <!-- Salario -->
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select name="salario" id="salario"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
    </div>
    <!-- Categoria -->
    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select name="categoria" id="categoria"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
        </select>
    </div>

    <!-- Empresa -->
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input wire:model="form.email" id="empresa" class="block mt-1 w-full" type="text" name="empresa" required
            autofocus autocomplete="empresa" placeholder="Empresa: ej. Netflix, Uber, Shopify" />
    </div>
    <!-- calendario ultimo dia -->
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input wire:model="form.email" id="ultimo_dia"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            type="date" name="ultimo_dia" autocomplete="ultimo_dia" />
    </div>
    <!-- Descripcion -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del puesto')" />
        <textarea name="descripcion" placeholder="Descripcion general del puesto, experiencia"
            class="border-gray-300 block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-36"></textarea>
    </div>
    <!-- Imagen -->
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input wire:model="form.email" id="imagen" class="block mt-1 w-full" type="file" name="imagen" required
            autofocus />
    </div>
</form>