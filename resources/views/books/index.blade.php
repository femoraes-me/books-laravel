<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Nome</th>
            <th>Autor</th>
            <th>Categoria</th>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>   
</body>
</html>