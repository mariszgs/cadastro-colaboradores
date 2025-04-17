<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Dados do Colaborador
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('colaboradores.update', $colaborador->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nome_completo" class="block font-medium text-sm text-gray-700">Nome Completo:</label>
                <input type="text" name="nome_completo" id="nome_completo"
                       class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                       value="{{ $colaborador->nome_completo }}" required>
            </div>

            <div>
                <label for="setor" class="block font-medium text-sm text-gray-700">Setor:</label>
                <select name="setor" id="setor"
                        class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    <option value="">Selecione</option>
                    <option value="Tecnologia" {{ $colaborador->setor == 'Tecnologia' ? 'selected' : '' }}>Tecnologia</option>
                    <option value="Administrativo" {{ $colaborador->setor == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                    <option value="Projeto" {{ $colaborador->setor == 'Projeto' ? 'selected' : '' }}>Projeto</option>
                </select>
            </div>

            <div>
                <label for="cidade" class="block font-medium text-sm text-gray-700">Cidade:</label>
                <select name="cidade" id="cidade"
                        class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        required>
                    <option value="">Selecione</option>
                    <option value="Aracaju" {{ $colaborador->cidade == 'Aracaju' ? 'selected' : '' }}>Aracaju</option>
                    <option value="Belém" {{ $colaborador->cidade == 'Belém' ? 'selected' : '' }}>Belém</option>
                    <option value="Belo Horizonte" {{ $colaborador->cidade == 'Belo Horizonte' ? 'selected' : '' }}>Belo Horizonte</option>
                    <option value="Boa Vista" {{ $colaborador->cidade == 'Boa Vista' ? 'selected' : '' }}>Boa Vista</option>
                    <option value="Campo Grande" {{ $colaborador->cidade == 'Campo Grande' ? 'selected' : '' }}>Campo Grande</option>
                    <option value="Cuiabá" {{ $colaborador->cidade == 'Cuiabá' ? 'selected' : '' }}>Cuiabá</option>
                    <option value="Curitiba" {{ $colaborador->cidade == 'Curitiba' ? 'selected' : '' }}>Curitiba</option>
                    <option value="Florianópolis" {{ $colaborador->cidade == 'Florianópolis' ? 'selected' : '' }}>Florianópolis</option>
                    <option value="Fortaleza" {{ $colaborador->cidade == 'Fortaleza' ? 'selected' : '' }}>Fortaleza</option>
                    <option value="Goiânia" {{ $colaborador->cidade == 'Goiânia' ? 'selected' : '' }}>Goiânia</option>
                    <option value="João Pessoa" {{ $colaborador->cidade == 'João Pessoa' ? 'selected' : '' }}>João Pessoa</option>
                    <option value="Macapá" {{ $colaborador->cidade == 'Macapá' ? 'selected' : '' }}>Macapá</option>
                    <option value="Maceió" {{ $colaborador->cidade == 'Maceió' ? 'selected' : '' }}>Maceió</option>
                    <option value="Manaus" {{ $colaborador->cidade == 'Manaus' ? 'selected' : '' }}>Manaus</option>
                    <option value="Natal" {{ $colaborador->cidade == 'Natal' ? 'selected' : '' }}>Natal</option>
                    <option value="Palmas" {{ $colaborador->cidade == 'Palmas' ? 'selected' : '' }}>Palmas</option>
                    <option value="Porto Alegre" {{ $colaborador->cidade == 'Porto Alegre' ? 'selected' : '' }}>Porto Alegre</option>
                    <option value="Porto Velho" {{ $colaborador->cidade == 'Porto Velho' ? 'selected' : '' }}>Porto Velho</option>
                    <option value="Recife" {{ $colaborador->cidade == 'Recife' ? 'selected' : '' }}>Recife</option>
                    <option value="Rio Branco" {{ $colaborador->cidade == 'Rio Branco' ? 'selected' : '' }}>Rio Branco</option>
                    <option value="Rio de Janeiro" {{ $colaborador->cidade == 'Rio de Janeiro' ? 'selected' : '' }}>Rio de Janeiro</option>
                    <option value="Salvador" {{ $colaborador->cidade == 'Salvador' ? 'selected' : '' }}>Salvador</option>
                    <option value="São Luís" {{ $colaborador->cidade == 'São Luís' ? 'selected' : '' }}>São Luís</option>
                    <option value="São Paulo" {{ $colaborador->cidade == 'São Paulo' ? 'selected' : '' }}>São Paulo</option>
                    <option value="Teresina" {{ $colaborador->cidade == 'Teresina' ? 'selected' : '' }}>Teresina</option>
                    <option value="Vitória" {{ $colaborador->cidade == 'Vitória' ? 'selected' : '' }}>Vitória</option>
                </select>
            </div>

            <div>
                <label for="data_checkin" class="block font-medium text-sm text-gray-700">Data de Check-in:</label>
                <input type="datetime-local" name="data_checkin" id="data_checkin"
                       class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                       value="{{ \Carbon\Carbon::parse($colaborador->data_checkin)->format('Y-m-d\TH:i') }}" required>
            </div>

            <div>
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700">
                    Salvar Alterações
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
