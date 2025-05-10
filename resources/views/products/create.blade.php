<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Item</title>
    <link rel="stylesheet" href="{{ asset('css/createproducts.css') }}">
    <link rel="shortcut icon" href="{{ asset('css/favicon.ico')}}" type="image/x-icon">
    @php
    $urllist = url('/products/list');
    @endphp
</head>
<body>
    <form action="{{ url('/products') }}" method="POST">
        @csrf
        <label>Nome:</label><br>
            <input name="name" type="text" /><br>

        <label>Descrição:</label><br>
            <textarea name="description"></textarea>
            <br> 
        <label>Quantidade:</label><br>
            <input name="quantity" type="number" />
            <br>
        <label>Preço:</label><br>
            <input name="price" type="number" step="0.01" />
            <br>
        <label>Tipo:</label><br>
            <input name="type_id" type="number" />
            <br>
        <input type="submit" value="Salvar" />
    </form>

    <br>

    <div class="create_products_table_producs">
    <table border="1">
        <thead>
            <tr>
                <th>Produto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    @if ($product->name != null)
                        <td>{{ $product->name }}</td>
                    @else
                        <td></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{ url('/products/list') }}">
    <button type="button">Ver Lista Detalhada Dos Produtos</button>
</a>

</div>

<div class="create_products_table_types">
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{ url('/types/new') }}"><button type="button">Adicionar Novo Tipo</button></a>
</div>
</body>
</html>
