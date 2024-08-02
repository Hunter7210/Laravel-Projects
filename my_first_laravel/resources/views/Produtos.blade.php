<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Inclua seu CSS aqui -->
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Produtos</h1>

        <a href="" class="btn btn-primary mb-3">Adicionar Produto</a>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td class="d-flex">
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info btn-sm me-2">Ver</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>

                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="m-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Nenhum produto encontrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Inclua seu JavaScript aqui -->
</body>

</html>