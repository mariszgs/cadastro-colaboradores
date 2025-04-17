<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="text-gray-900 dark:text-gray-100">
        {{ __("You're logged in!") }}

        <div class="mt-6">
            <a href="{{ route('colaboradores.create') }}"
               class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">
                ➕ Adicionar Colaborador
            </a>
        </div>
    </div>
</x-app-layout>


