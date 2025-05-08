<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
</head>
<body>
    <h3>Lista de Produtos</h3>
    <ul>
        @foreach($products as $product)
        <li> {{ $product['name'] }} </li>
        @endforeach
        <a href="{{ url('/') }}">Voltar</a> 
        </br>
        <a href="{{ url('/products/new') }}">Inserir Novo Item</a>
    </ul>
</body>
</html>