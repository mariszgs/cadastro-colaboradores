@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Colaborador</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('colaboradores.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome_completo" class="form-label">Nome Completo:</label>
            <input type="text" name="nome_completo" id="nome_completo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="setor" class="form-label">Setor:</label>
            <select name="setor" id="setor" class="form-control" required>
                <option value="">Selecione</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Projeto">Projeto</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <select name="cidade" id="cidade" class="form-control" required>
                <option value="">Selecione</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Brasília">Brasília</option>
                <!-- Pode completar com todas as capitais -->
            </select>
        </div>

        <div class="mb-3">
            <label for="data_checkin" class="form-label">Data de Check-in:</label>
            <input type="datetime-local" name="data_checkin" id="data_checkin" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
