<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        < class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('messaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-2 text-sm">
                {{ session('mensaje') }}
            </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("VACANTES") }}
                </div>
            </div>
    </div>
    </div>
</x-app-layout>