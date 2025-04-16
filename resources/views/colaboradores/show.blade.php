@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Colaborador</h1>

    <div class="card p-4 mb-3">
        <h3>{{ $colaborador->nome_completo }}</h3>
        <p><strong>Setor:</strong> {{ $colaborador->setor }}</p>
        <p><strong>Cidade:</strong> {{ $colaborador->cidade }}</p>
        <p><strong>Data de Check-in:</strong> 
            {{ \Carbon\Carbon::parse($colaborador->data_checkin)->format('d/m/Y H:i') }}
        </p>
    </div>

    <a href="{{ route('colaboradores.index') }}" class="btn btn-secondary">Voltar para a lista</a>
</div>
@endsection
  