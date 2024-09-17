@extends('templates.template')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Criar Niveis</title>
</head>
<body>

    <h1 class="text-center mt-4">Cadastro</h1>
   
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cadastrar Nivel</h3>
            </div>
            <div class="card-body">
                <form action="{{route('niveis.store')}}" method="post"> 
                    @csrf
                    <div class="mb-3">
                        <label for="nivel" class="form-label">Nome:</label>
                        <input type="text" id="nivel" name="nivel" class="form-control border-primary" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="/" class="btn btn-secondary">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>
@endsection