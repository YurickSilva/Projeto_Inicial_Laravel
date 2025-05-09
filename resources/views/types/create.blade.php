<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Tipos</title>
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
    </style>
    <script>
        async function enviarTipo(event) {
            event.preventDefault(); // Impede o redirecionamento

            const token = document.querySelector('input[name="_token"]').value;
            const nome = document.querySelector('input[name="name"]').value;

            const resposta = await fetch("{{ url('types/new') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": token
                },
                body: JSON.stringify({ name: nome })
            });

            if (resposta.ok) {
                alert("Tipo salvo com sucesso!");
            } else {
                alert("Erro ao salvar tipo.");
            }
        }
        
    </script>

</head>
<body>
    <form onsubmit="enviarTipo(event)">
        @csrf
        <label>Tipos de produto:</label>
        <br>
        <input name="name" type="text" />
        <br>
        <input type="submit" value="Salvar" />
    </form>
    <br>
    @php
    $url = url('/products');
    @endphp
    <button type="button" onclick="window.location.href='{{ $url }}'">Voltar</but>

</body>
</html>
