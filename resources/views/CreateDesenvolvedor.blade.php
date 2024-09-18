@extends('templates.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de desenvolvedores</title>
</head>
<body>

<h1 class="text-center mt-4">Cadastro</h1>

   
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@if(isset($devs)) Editar @else Cadastrar @endif Desesenvolvedor</h3>
        </div>
        @if(isset($devs))
    <form action="{{ route('desenvolvedores.update', $devs->id) }}" method="post" name="formEdit" id="formEdit" class="p-4 border shadow rounded">
        @method('PUT')
@else 
    <form action="{{ route('desenvolvedores.store') }}" method="post" name="formCard" id="formCard" class="p-4 border shadow rounded">
@endif

    @csrf
    <div class="form-group mb-3">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $devs->nome ?? '' }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" class="form-control" required>
            <option value="" disabled {{ !isset($devs) ? 'selected' : '' }}>Selecionar</option>
            <option value="Masculino" {{ (isset($devs) && $devs->sexo == 'Masculino') ? 'selected' : '' }}>Masculino</option>
            <option value="Feminino" {{ (isset($devs) && $devs->sexo == 'Feminino') ? 'selected' : '' }}>Feminino</option>
            <option value="Outro" {{ (isset($devs) && $devs->sexo == 'Outro') ? 'selected' : '' }}>Outro</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $devs->data_nascimento ?? '' }}">
    </div>
    <div class="form-group mb-3">
        <label for="hobby">Hobby:</label>
        <textarea id="hobby" name="hobby" class="form-control" placeholder="Digite seu hobby" rows="3">{{ $devs->hobby ?? '' }}</textarea>
    </div>
    <div class="form-group mb-3">
        <label for="nivel_id">Níveis:</label>
        <select id="nivel_id" name="nivel_id" class="form-control" required>
            <option value="" disabled selected>Selecione um nível</option>
            @foreach($niveis as $nivel)
                <option value="{{ $nivel->id }}" {{ (isset($devs) && $devs->nivel_id == $nivel->id) ? 'selected' : '' }}>
                    {{ $nivel->nivel }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">@if(isset($devs)) Atualizar @else Cadastrar @endif</button>
        <a href="{{ route('desenvolvedores.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</form>

    </div>
</div>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
@endsection

