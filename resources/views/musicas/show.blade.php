<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Musica</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 500px; }
        td { border: 1px solid #ccc; padding: 10px; }
        td:first-child { background: #4a4a8a; color: white; font-weight: bold; width: 200px; }
        .btn { padding: 8px 20px; border-radius: 4px; text-decoration: none; font-size: 14px; }
        .btn-voltar { background: #aaa; color: white; }
    </style>
</head>
<body>
    <h1>Detalhes: {{ $musica->titulo }}</h1>

    <table>
        <tr><td>ID</td><td>{{ $musica->id }}</td></tr>
        <tr><td>Título</td><td>{{ $musica->titulo }}</td></tr>
        <tr><td>Artista</td><td>{{ $musica->artista }}</td></tr>
        <tr><td>Produtora</td><td>{{ $musica->produtora }}</td></tr>
        <tr><td>Distribuidora</td><td>{{ $musica->distribuidora }}</td></tr>
        <tr><td>Data de Lançamento</td><td>{{ \Carbon\Carbon::parse($musica->data_lancamento)->format('d/m/Y') }}</td></tr>
        <tr><td>Plataforma</td><td>{{ $musica->plataforma ?? '-' }}</td></tr>
        <tr><td>Gênero</td><td>{{ $musica->genero ?? '-' }}</td></tr>
    </table>

    <br>
    <a href="{{ route('musicas.index') }}" class="btn btn-voltar">Voltar</a>
</body>
</html>