<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/listproducts.css') }}">
    <link rel="shortcut icon" href="{{ asset('css/favicon.ico')}}" type="image/x-icon">
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="{{ url('/products') }}">
        <button type="button">Voltar ao Cadastro De Produtos</button>
    </a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Tipo</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->type->name ?? 'Tipo não encontrado' }}</td>
                    <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $product->updated_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
