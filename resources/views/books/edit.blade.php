<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros | Editar</title>
</head>
<body>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf <!-- Atalho para inserir token do laravel -->
        @method('PUT') <!-- Informando oculto no HTML método PUT de rota -->
        <label>Nome</label>
        <input type="text" name="name" value="{{ $book->name }}"></input>
        <br>
        <label>Autor</label>
        <input type="text" name="author" value="{{ $book->author }}"></input>
        <br>
        <label>Categoria</label>
        <select name="category">
            <option {{ $book->category == 'Vida Cristã' ? 'selected' : '' }}>Vida Cristã</option>
            <option {{ $book->category == 'Infantil' ? 'selected' : '' }}>Infantil</option>
            <option {{ $book->category == 'Educação' ? 'selected' : '' }}>Educação</option>
        </select>
        <br>
        <button type="submit">ALTERAR</button>
    </form>
</body>
</html>