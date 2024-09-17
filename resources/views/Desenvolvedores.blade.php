@extends('templates.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Desenvolvedores</title>
    <style>
        .alert-custom {
            font-size: 1.2rem; 
            font-weight: 500; 
            text-align: center;
            max-width: 800px;
            margin: 20px auto;
        }
    </style>
</head>
<body>


<div class="container mt-4">
    <h1 class="text-center mb-4">Desenvolvedores</h1>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{url('create/desenvolvedores')}}" class="btn btn-primary">Cadastrar</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Nome</th>
                    <th scope="col" class="text-center">Sexo</th>
                    <th scope="col" class="text-center">Data Nascimento</th>
                    <th scope="col" class="text-center">Nível</th>
                    <th scope="col" class="text-center">Hobby</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($devs as $dev)
                <tr>
                    <td>{{ $dev->nome }}</td>
                    <td>{{ $dev->sexo }}</td>
                    <td>{{ \Carbon\Carbon::parse($dev->data_nascimento)->format('d/m/Y') }}</td>
                    <td>{{ $dev->niveis->nivel }}</td>
                    <td>{{ $dev->hobby }}</td>
                    <td class="text-center">
                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form action="{{ route('desenvolvedores.destroy', $dev->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-delete">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const form = this.closest('form');
            Swal.fire({
                title: 'Tem certeza?',
                text: "Você não poderá reverter isso!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
@endsection


