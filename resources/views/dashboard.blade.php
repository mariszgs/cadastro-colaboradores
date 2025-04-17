<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                {{ __("Você está logado!") }}

                <div class="mt-6">
                    <a href="{{ route('colaboradores.create') }}"
                       class="inline-block bg-gray-500 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">
                        ➕ Adicionar Colaborador
                    </a>
                </div>

                <div class="mt-3">
                    <a href="{{ route('colaboradores.index') }}"
                       class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        👀 Visualizar Colaboradores
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


