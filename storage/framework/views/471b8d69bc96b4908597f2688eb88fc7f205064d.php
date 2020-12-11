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
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->name); ?></td>
                    <td><?php echo e($book->author); ?></td>
                    <td><?php echo e($book->category); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>   
</body>
</html><?php /**PATH C:\xampp\htdocs\books-laravel\resources\views/books/index.blade.php ENDPATH**/ ?>