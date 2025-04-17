<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Lista de Colaboradores
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded shadow">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('colaboradores.create') }}" 
           class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            + Cadastrar Novo
        </a>

        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded">
            <table class="table-auto w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <th class="px-4 py-2">Nome</th>
                        <th class="px-4 py-2">Setor</th>
                        <th class="px-4 py-2">Cidade</th>
                        <th class="px-4 py-2">Data de Check-in</th>
                        <th class="px-4 py-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($colaboradores as $colaborador)
                        <tr class="border-b dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td class="px-4 py-2">{{ $colaborador->nome_completo }}</td>
                            <td class="px-4 py-2">{{ $colaborador->setor }}</td>
                            <td class="px-4 py-2">{{ $colaborador->cidade }}</td>
                            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($colaborador->data_checkin)->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('colaboradores.edit', $colaborador->id) }}" 
                                   class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 transition">
                                   Editar
                                </a>

                                <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition"
                                            onclick="return confirm('Tem certeza que deseja excluir?')">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 text-center text-gray-500">Nenhum colaborador cadastrado ainda</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
