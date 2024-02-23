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
        <select name="salario" id="salario" class="block mt-1 w-full">
        </select>
    </div>
    <!-- Categoria -->
    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select name="categoria" id="categoria" class="block mt-1 w-full">
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
        <x-text-input wire:model="form.email" id="ultimo_dia" class="mt-1 w-full" type="date" name="ultimo_dia"
            autocomplete="ultimo_dia" />
    </div>
    <!-- Descripcion -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del puesto')" />
        <textarea name="descripcion" placeholder="Descripcion general del puesto, experiencia"
            class="block mt-1 w-full h-36"></textarea>
    </div>
    <!-- Imagen -->
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input wire:model="form.email" id="imagen" class="block mt-1 w-full" type="file" name="imagen" required
            autofocus />
    </div>
</form>