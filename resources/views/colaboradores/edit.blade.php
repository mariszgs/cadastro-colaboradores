@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Dados do Colaborador</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('colaboradores.update', $colaborador->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome_completo" class="form-label">Nome Completo:</label>
            <input type="text" name="nome_completo" id="nome_completo" class="form-control" value="{{ $colaborador->nome_completo }}" required>
        </div>

        <div class="mb-3">
            <label for="setor" class="form-label">Setor:</label>
            <select name="setor" id="setor" class="form-control" required>
                <option value="">Selecione</option>
                <option value="Tecnologia" {{ $colaborador->setor == 'Tecnologia' ? 'selected' : '' }}>Tecnologia</option>
                <option value="Administrativo" {{ $colaborador->setor == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                <option value="Projeto" {{ $colaborador->setor == 'Projeto' ? 'selected' : '' }}>Projeto</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <select name="cidade" id="cidade" class="form-control" required>
                <option value="">Selecione</option>
                <option value="São Paulo" {{ $colaborador->cidade == 'São Paulo' ? 'selected' : '' }}>São Paulo</option>
                <option value="Rio de Janeiro" {{ $colaborador->cidade == 'Rio de Janeiro' ? 'selected' : '' }}>Rio de Janeiro</option>
                <option value="Brasília" {{ $colaborador->cidade == 'Brasília' ? 'selected' : '' }}>Brasília</option>
                <!-- Pode completar com as outras capitais -->
            </select>
        </div>

        <div class="mb-3">
            <label for="data_checkin" class="form-label">Data de Check-in:</label>
            <input type="datetime-local" name="data_checkin" id="data_checkin" class="form-control"
                value="{{ \Carbon\Carbon::parse($colaborador->data_checkin)->format('Y-m-d\TH:i') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
@endsection
