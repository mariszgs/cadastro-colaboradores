@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Colaboradores</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('colaboradores.create') }}" class="btn btn-primary mb-3">Cadastrar Novo</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Setor</th>
                <th>Cidade</th>
                <th>Data de Check-in</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($colaboradores as $colaborador)
                <tr>
                    <td>{{ $colaborador->nome_completo }}</td>
                    <td>{{ $colaborador->setor }}</td>
                    <td>{{ $colaborador->cidade }}</td>
                    <td>{{ \Carbon\Carbon::parse($colaborador->data_checkin)->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum colaborador cadastrado ainda.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
