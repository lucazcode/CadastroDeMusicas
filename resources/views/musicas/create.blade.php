<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Musica</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, select { width: 350px; padding: 6px; margin-top: 4px; border: 1px solid #ccc; border-radius: 4px; }
        .erro { color: red; font-size: 13px; }
        .btn { padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; margin-top: 15px; }
        .btn-salvar { background: #4a4a8a; color: white; }
        .btn-voltar { background: #aaa; color: white; text-decoration: none; padding: 8px 20px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Novo Musica</h1>

    <form action="{{ route('musicas.store') }}" method="POST">
        @csrf

        <label>Título *</label>
        <input type="text" name="titulo" value="{{ old('titulo') }}" maxlength="50">
        @error('titulo') <span class="erro">{{ $message }}</span> @enderror

        <label>Artista *</label>
        <input type="text" name="artista" value="{{ old('artista') }}" maxlength="50">
        @error('artista') <span class="erro">{{ $message }}</span> @enderror

        <label>Produtora * (código numérico)</label>
        <input type="number" name="produtora" value="{{ old('produtora') }}">
        @error('produtora') <span class="erro">{{ $message }}</span> @enderror

        <label>Distribuidora *</label>
        <input type="text" name="distribuidora" value="{{ old('distribuidora') }}" maxlength="100">
        @error('distribuidora') <span class="erro">{{ $message }}</span> @enderror

        <label>Data de Lançamento *</label>
        <input type="date" name="data_lancamento" value="{{ old('data_lancamento') }}">
        @error('data_lancamento') <span class="erro">{{ $message }}</span> @enderror

        <label>Plataforma (código numérico)</label>
        <input type="number" name="plataforma" value="{{ old('plataforma') }}">
        @error('plataforma') <span class="erro">{{ $message }}</span> @enderror

        <label>Gênero (código numérico)</label>
        <input type="number" name="genero" value="{{ old('genero') }}">
        @error('genero') <span class="erro">{{ $message }}</span> @enderror

        <br>
        <button type="submit" class="btn btn-salvar">Salvar</button>
        <a href="{{ route('musicas.index') }}" class="btn btn-voltar">Voltar</a>
    </form>
</body>
</html>