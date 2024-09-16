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
            <h3 class="card-title">Cadastrar Desenvolvedor</h3>
        </div>
        <div class="card-body">
            <form action="{{route('desenvolvedores.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control border-primary" required>
                </div>

                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo:</label>
                    <select id="sexo" name="sexo" class="form-select border-primary" required>
                        <option value="">Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="data_nascimento" class="form-label">Data nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control border-primary">
                </div>

                <div class="mb-3">
                    <label for="hobby" class="form-label">Hobby:</label>
                    <textarea id="hobby" name="hobby" class="form-control border-primary" placeholder="Digite seu hobby" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="nivel_id" class="form-label">Níveis:</label>
                    <select id="nivel_id" name="nivel_id" class="form-select border-primary" required>
                        <option value="">Selecione um nível</option>
                        @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}">{{ $nivel->nivel }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="/desenvolvedores" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
