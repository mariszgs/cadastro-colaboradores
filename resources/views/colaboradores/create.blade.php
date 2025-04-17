<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Cadastrar Novo Colaborador
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $erro)
                                <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('colaboradores.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="nome_completo" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Nome Completo:</label>
                        <input type="text" name="nome_completo" id="nome_completo" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" required>
                    </div>

                    <div class="mb-4">
                        <label for="setor" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Setor:</label>
                        <select name="setor" id="setor" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" required>
                            <option value="">Selecione</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Projeto">Projeto</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="cidade" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Cidade:</label>
                        <select name="cidade" id="cidade" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" required>
                            <option value="">Selecione</option>
                            <option value="Aracaju">Aracaju</option>
                            <option value="Belém">Belém</option>
                            <option value="Belo Horizonte">Belo Horizonte</option>
                            <option value="Boa Vista">Boa Vista</option>
                            <option value="Campo Grande">Campo Grande</option>
                            <option value="Cuiabá">Cuiabá</option>
                            <option value="Curitiba">Curitiba</option>
                            <option value="Florianópolis">Florianópolis</option>
                            <option value="Fortaleza">Fortaleza</option>
                            <option value="Goiânia">Goiânia</option>
                            <option value="João Pessoa">João Pessoa</option>
                            <option value="Macapá">Macapá</option>
                            <option value="Maceió">Maceió</option>
                            <option value="Manaus">Manaus</option>
                            <option value="Natal">Natal</option>
                            <option value="Palmas">Palmas</option>
                            <option value="Porto Alegre">Porto Alegre</option>
                            <option value="Porto Velho">Porto Velho</option>
                            <option value="Recife">Recife</option>
                            <option value="Rio Branco">Rio Branco</option>
                            <option value="Rio Branco">Rio de Janeiro</option>
                            <option value="Salvador">Salvador</option>
                            <option value="São Luís">São Luís</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Teresina">Teresina</option>
                            <option value="Vitória">Vitória</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="data_checkin" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Data de Check-in:</label>
                        <input type="datetime-local" name="data_checkin" id="data_checkin" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100" required>
                    </div>

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:focus:ring-offset-gray-800">
                        Salvar
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
