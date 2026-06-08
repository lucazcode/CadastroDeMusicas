<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Musicas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #4a4a8a; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        a { color: #4a4a8a; }
        .btn { padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: 13px; }
        .btn-editar { background: #f0a500; color: white; }
        .btn-excluir { background: #cc0000; color: white; }
        .btn-novo { background: #4a4a8a; color: white; padding: 8px 16px; }
        .sucesso { background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h1>Cadastro de Musicas</h1>

    @if(session('sucesso'))
        <p class="sucesso">{{ session('sucesso') }}</p>
    @endif

    <a href="{{ route('musicas.create') }}" class="btn btn-novo">+ Nova Musica</a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Artista</th>
                <th>Produtora</th>
                <th>Distribuidora</th>
                <th>Lançamento</th>
                <th>Plataforma</th>
                <th>Gênero</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($musicas as $musica)
            <tr>
                <td>{{ $musica->id }}</td>
                <td>{{ $musica->titulo }}</td>
                <td>{{ $musica->artista }}</td>
                <td>{{ $musica->produtora }}</td>
                <td>{{ $musica->distribuidora }}</td>
                <td>{{ \Carbon\Carbon::parse($musica->data_lancamento)->format('d/m/Y') }}</td>
                <td>{{ $musica->plataforma ?? '-' }}</td>
                <td>{{ $musica->genero ?? '-' }}</td>
                <td>
                    <a href="{{ route('musicas.edit', $musica->id) }}" class="btn btn-editar">Editar</a>
                    <form action="{{ route('musicas.destroy', $musica->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-excluir" onclick="return confirm('Confirma exclusão?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>