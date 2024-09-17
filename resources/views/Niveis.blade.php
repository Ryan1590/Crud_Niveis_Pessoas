@extends('templates.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niveis</title>
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
    <h1 class="text-center mb-4">Niveis</h1>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{url('create/niveis')}}" class="btn btn-primary">Cadastrar</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Nível</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($niveis as $nivel)
                <tr>
                    <td>{{ $nivel->id }}</td>
                    <td>{{ $nivel->nivel }}</td>
                    <td class="text-center">
                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form action="{{ route('niveis.destroy', $nivel->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-delete">Deletar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Nenhum nivel cadastrado</td>
                </tr>
                @endforelse
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

</body>
</html>
@endsection


