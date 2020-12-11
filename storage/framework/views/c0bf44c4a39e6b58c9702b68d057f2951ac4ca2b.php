<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros | Editar</title>
</head>
<body>
    <form action="<?php echo e(route('books.store')); ?>" method="POST">
        <?php echo csrf_field(); ?> <!-- Atalho para inserir token do laravel -->
        <label>Nome</label>
        <input type="text" name="name" value="<?php echo e($book->name); ?>"></input>
        <br>
        <label>Autor</label>
        <input type="text" name="author" value="<?php echo e($book->author); ?>"></input>
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
</html><?php /**PATH C:\xampp\htdocs\books-laravel\resources\views/books/edit.blade.php ENDPATH**/ ?>