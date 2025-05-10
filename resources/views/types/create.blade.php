<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('css/favicon.ico')}}" type="image/x-icon">
    <title>Inserção de Tipos</title>
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        dialog {
            padding: 20px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px #0005;
        }
        dialog::backdrop {
            background: rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<dialog id="mensagemDialog" >
    <p id="mensagemTexto" style="text-align: center;"></p>
    <button onclick="document.getElementById('mensagemDialog').close()" style="align-self: center;">Fechar</button>
</dialog>


<form method="POST" action="{{ url('/types/new') }}">
    @csrf
    <label>Tipos de produto:</label>
        <input name="name" type="text" />
        <input type="submit" value="Salvar" />
</form>

@php
    $url = url('/products');
@endphp
<button type="button" onclick="window.location.href='{{ $url }}'">Voltar</button>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const dialog = document.getElementById('mensagemDialog');
        const texto = document.getElementById('mensagemTexto');

        @if ($errors->any())
            texto.innerHTML = `{!! implode('<br>', $errors->all()) !!}`;
            dialog.showModal();  // Exibe o dialog com erros
        @elseif (session('success'))
            texto.textContent = "{{ session('success') }}";  // Mensagem de sucesso
            dialog.showModal();  // Exibe o dialog com a mensagem de sucesso
        @elseif (session('error'))
            texto.textContent = "{{ session('error') }}";  // Mensagem de erro
            dialog.showModal();  // Exibe o dialog com a mensagem de erro
        @endif
    });
</script>
</body>
</html>
