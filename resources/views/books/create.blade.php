<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros | Cadastro</title>
</head>
<body>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf <!-- Atalho para inserir token do laravel -->
        <label>Nome</label>
        <input type="text" name="name">
        <br>
        <label>Autor</label>
        <input type="text" name="author">
        <br>
        <label>Categoria</label>
        <select name="category">
            <option>Vida Cristã</option>
            <option>Infantil</option>
            <option>Educação</option>
        </select>
        <br>
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>